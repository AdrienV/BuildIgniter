<?php

/**
 * Form Generator controller
 *
 * @author Adrien Vinet <adrien@devtoo.fr>
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Buildigniter extends CI_Controller {

    private $formName;
    private $cssName;
    private $formDatas;
    private $demo;
    // Addon V1.1 - 2013-07-31
    private $js = array();
    private $css = array();
    // End Addon V1.1

    public function __construct() {
        parent::__construct();
        $this->demo = false;
    }
    /**
     * Generator controller
     */
    public function basic() {
        // Load view
        $this->load->view('buildigniter');
    }
    /**
     * Generator controller
     */
    public function index() {
        // Load view
        $this->load->view('_buildigniter/index');
    }

    /**
     * Live code
     */
    public function builder($process = false) {
        // Get form name
        $this->formName = $this->input->post('formName');
        // Get css name
        $this->cssName = $this->input->post('cssName');
        // Get form datas
        $this->formDatas = json_decode($this->input->post('formDatas'), true);

        // Build codes
        list($data['controller'], $data['phpcontroller']) = $this->controllerBuilder();
        list($data['model'], $data['phpmodel']) = $this->modelBuilder();
        list($data['view'], $data['htmlview']) = $this->viewBuilder();
        list($data['sql'], $data['sqlview']) = $this->sqlBuilder();

        // Demo version
        if ($this->demo == true) {
            $data['controller'] = substr($data['controller'], 0, 500) . '.... <br /><strong>All code desactivated in demo version !</strong>';
            $data['model'] = substr($data['model'], 0, 500) . '.... <br /><strong>All code desactivated in demo version !</strong>';
            $data['view'] = substr($data['view'], 0, 500) . '.... <br /><strong>All code desactivated in demo version !</strong>';
            $data['sql'] = substr($data['sql'], 0, 100) . '.... <br /><strong>All code desactivated in demo version !</strong>';
        }
        // For process
        if ($process == true) {
            return $data;
        } else {
            echo json_encode($data);
        }
    }

    /**
     * Create files into CI project
     */
    public function creator() {

        // Call builder code
        $data = $this->builder(true);

        // Create controller
        $fp = fopen('application/controllers/' . ucfirst($this->formName) . '.php', 'w');
        fwrite($fp, $data['phpcontroller']);
        fclose($fp);
        // Create model
        $fp = fopen('application/models/' . ucfirst($this->formName) . '_model.php', 'w');
        fwrite($fp, $data['phpmodel']);
        fclose($fp);

        // Create view
        $fp = fopen('application/views/' . $this->formName . '.php', 'w');
        fwrite($fp, $data['htmlview']);
        fclose($fp);
        // Create success page
        $fp = fopen('application/views/' . $this->formName . '_success.php', 'w');
        fwrite($fp, $this->successBuilder());
        fclose($fp);
    }

    /**
     * Create db
     */
    public function dbCreator() {
        $data = $this->builder(true);

        // Create DB
        $this->db->query("DROP TABLE IF EXISTS " . $this->formName);
        $this->db->query($data['sqlview']);
    }

    /**
     * Create PHP controller code
     *
     * @return array code for write on generator page, code for use in php page
     */
    private function controllerBuilder() {
        // Create rules
        $validationRules = '';
        $filecheck = '';
        $insert = false;
        $insertTab = '';
        // Foreach on form fields added on generator
        foreach ($this->formDatas as $field) {
            $rules = array();
            // Create rules for codeigniter framework
            if (isset($field['rules'])) {
                $rules = json_decode($field['rules'], true);
            }
            if (!empty($field['min_length'])) {
                $rules[] = 'min_length[' . $field['min_length'] . ']';
            }
            if (!empty($field['max_length'])) {
                $rules[] = 'max_length[' . $field['max_length'] . ']';
            }
            if (!empty($field['exact_length'])) {
                $rules[] = 'exact_length[' . $field['exact_length'] . ']';
            }
            if (!empty($field['greater_than'])) {
                $rules[] = 'greater_than[' . $field['greater_than'] . ']';
            }
            if (!empty($field['less_than'])) {
                $rules[] = 'less_than[' . $field['less_than'] . ']';
            }

            // Create php line
            if (isset($rules)) {
                $validationRules .= '$this->form_validation->set_rules(\'' . strtolower($field['name']) . '\', \'' . $field['label'] . '\', \'' . implode('|', $rules) . '\');
                ';
            }


            // File
            if ($field['type'] == 'file') {
                // If file_format selected or maxfilesize indicated
                if (isset($field['file_format']) || isset($field['maxfilesize'])) {
                    if (!isset($field['file_format'])) {
                        $fileformat = 'false';
                    } else {
                        $fileformat = str_replace(']', ')', str_replace('[', 'array(', sprintf($field['file_format'])));
                    }

                    // Create check line for checking file options
                    $filecheck .= '$errorfile["' . $field['name'] . '"] = $this->fileup->checkErrorUpload($_FILES["' . $field['name'] . '"], ' . $fileformat . ', ' . $field['maxfilesize'] . ');
                    ';
                }
            }

            // Check if database option is checked for create fields to insert
            if (isset($field['database_fields'])) {
                // Option to active database insert
                $insert = true;
                // Tab to insert
                $insertTab .= '$insertTab["' . $field['name'] . '"] = $_POST["' . $field["name"] . '"];
                    ';
            }
        }

        // Create com for files check
        if ($filecheck != '') {
            $filecheck = '// Files validation
                ' . $filecheck;
        }

        // Create code to insert in database
        if ($insert == true) {
            $database_insert = '
                // If valid
                if($valid == true) {
                    ' . $insertTab . '
                    // Save to bdd
                    if (!$this->' . $this->formName . '_model->save($insertTab) == true) {
                         // Save error
                        $data["error"] = "save";
                    }
                }';
        } else {
            $database_insert = '';
        }

        // Build the controller
        $controller = '<?php
        class ' . ucfirst($this->formName) . ' extends CI_Controller {
            // Constructor
            function __construct()
            {
                    parent::__construct();
                    $this->load->library(array(\'form_validation\', \'fileup\'));
                    $this->load->helper(array(\'form\'));
                    $this->load->model(\'' . $this->formName . '_model\');
            }

            // Form ' . ucfirst($this->formName) . '
            public function index()
            {
                // Init
                $data = array();
                // If form sended
                if(!empty($_POST)) {
                    // Delimitors
                    $this->form_validation->set_error_delimiters(\'<p class="error">\', \'</p>\');

                    // Validation rules
                    ' . $validationRules . '

                        ' . $filecheck . '

                    // To block database insertion if we have file errors
                    $valid = true;

                    // Check for file errors
                    if(isset($errorfile)) {
                        // Create file errors for view
                        foreach($errorfile as $name => $errorf) {
                            if($errorf != false) {
                                $data["errorfile"][$name] = $errorf;
                                $valid = false;
                            }
                        }
                    }

                    if ($this->form_validation->run() == true) {
                        // Insert in bdd
                        ' . $database_insert . '

                        // Redirect to success page
                        redirect(\'' . $this->formName . '/success\');
                    }
                    else {
                        // Validation error
                        $data["error"] = "validation";

                    }
                }
                // Load view
                $this->load->view(\'' . $this->formName . '\', $data);
            }

            // Success
            public function success() {
                // Load view
                $this->load->view(\'' . $this->formName . '_success\');
            }

        }
        ?>';

        return array(str_replace('<', '&lt;', $controller), $controller);
    }

    /**
     * Create PHP model code
     *
     * @return array code for write on generator page, code for use in php page
     */
    private function modelBuilder() {
        // Create model
        $model = '<?php
    class ' . ucfirst($this->formName) . '_model extends CI_Model {

        private $table;

        // Constructor
        function __construct() {

            parent::__construct();
            $this->table = "' . $this->formName . '";
        }

        /**
        * Insert datas in ' . $this->formName . '
        *
        * @param array $data
        * @return bool
        */
        function save($data = array()) {
            // Insert
            $this->db->insert($this->table, $data);

            // If error return false, else return inserted id
            if (!$this->db->affected_rows()) {
	        return false;
            } else {
		return $this->db->insert_id();
            }
        }

    }
    ?>';

        return array(str_replace('<', '&lt;', $model), $model);
    }

    /**
     * Create HTML view code
     *
     * @return array code for write on generator page, code for use in html page
     */
    private function viewBuilder() {
        $html = '';
        $file = false;
        // Create fields
        foreach ($this->formDatas as $field) {
            $type = $field['type'];
            switch ($type) {
                case 'text' :
                case 'password' :
                case 'hidden' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                        <input type="' . $type . '" name="' . $field['name'] . '" id="' . $field['name'] . '" value="<?php echo set_value("' . $field['name'] . '", "' . $field['value'] . '"); ?>"/>';
                    break;
                // Addon - 2013-07-31
                case 'date' :
                case 'datetime' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                        <input type="text" name="' . $field['name'] . '" id="' . $field['name'] . '" value="<?php echo set_value("' . $field['name'] . '", "' . $field['value'] . '"); ?>"/>';


                    if ($type == 'datetime') {
                        $plugin = $this->addPlugin('widget', false);
                        $plugin = $this->addPlugin('date');
                    }
                    $plugin = $this->addPlugin($type);
                    if(!isset($this->js['script'])) {
                        $this->js['script'] = '';
                    }
                    if ($type == 'datetime') {
                        $this->js['script'] .= '
                            <script type="text/javascript">$(document).ready(function() {$("#' . $field['name'] . '").datetimepicker({ dateFormat: "yy-mm-dd", timeFormat : "HH:mm"});});</script>';
                    } else {
                        $this->js['script'] .= '
                            <script type="text/javascript">$(document).ready(function() {$("#' . $field['name'] . '").datepicker({ dateFormat: "yy-mm-dd"});});</script>';
                    }
                    break;
                // End Addon
                case 'select' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                        <select name="' . $field['name'] . '">';
                    // Add options
                    foreach ($field['options'] as $option) {
                        $html .= '
                            <option value="' . $option . '" <?php echo set_select("' . $field['name'] . '", "' . $option . '"); ?>>' . $option . '</option>';
                    }
                    $html .='
                        </select>';
                    break;
                case 'checkbox' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                            ';
                    // Add options
                    foreach ($field['checkbox'] as $option) {
                        $html .= '
                            <input type="checkbox" value="' . $option . '" value="<?php echo set_value("' . $field['name'] . '", "' . $option . '"); ?>"><span>' . $option . '</span>';
                    }
                    break;
                case 'radio' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                            ';
                    // Add options
                    foreach ($field['radio'] as $option) {
                        $html .= '
                            <input type="radio" value="' . $option . '" value="<?php echo set_value("' . $field['name'] . '", "' . $option . '"); ?>"><span>' . $option . '</span>';
                    }
                    break;
                case 'reset' :
                case 'submit' :
                    $html .= '
                        <input type="' . $type . '" name="' . $field['name'] . '" id="' . $field['name'] . '" value="<?php echo set_value("' . $field['name'] . '", "' . $field['value'] . '"); ?>"/>';
                    break;
                case 'textarea' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                        <textarea name="' . $field['name'] . '" id="' . $field['name'] . '"><?php echo set_value("' . $field['name'] . '", "' . $field['value'] . '"); ?></textarea>';
                    break;
                case 'file' :
                    $html .= '
                        <label for="' . $field['name'] . '">' . $field['label'] . '</label>
                        <input type="file"  name="' . $field['name'] . '" id="' . $field['name'] . '" />';
                    $file = true;
                    break;
            }
        }

        $view = '
            <html>
                <head>
                <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/generator/' . $this->cssName . '.css">
                    '; // Addon - 2013-07-31
                foreach($this->css as $css) {
                    $view .= $css.'
                        ';
                }
                foreach($this->js as $js) {
                    $view .= $js.'
                        ';
                }
                // End Addon
                $view .= '
                </head>
                <body>
                <?php
                // Show errors
                if(isset($error)) {
                    switch($error) {
                        case "validation" :
                            echo validation_errors();
                        break;
                        case "save" :
                            echo "<p class=\'error\'>Save error !</p>";
                        break;
                    }
                }
                if(isset($errorfile)) {
                    foreach($errorfile as $name => $value) {
                        echo "<p class=\'error\'>File \"".$name."\" upload error : ".$value."</p>";
                    }
                }
                ?>
                <form action="<?php echo base_url() ?>' . $this->formName . '" method="post" ' . ($file == true ? 'enctype="multipart/form-data"' : '') . '>
                ' . $html . '
                </form>
                </body>
            </html>';
        return array(str_replace('<', '&lt;', $view), $view);
    }

    /**
     * Create SQL code
     *
     * @return array code for write on generator page, code for use in sql page
     */
    private function sqlBuilder() {
        $fSql = '';
        // Create fields in db
        foreach ($this->formDatas as $field) {
            if (isset($field['database_fields'])) {
                $fSql .= '
            ' . $field['name'] . ' ' . $field['database_fields'] . '(' . $field['database_length'] . ') NOT NULL,';
            }
        }

        $sql = '
            CREATE TABLE IF NOT EXISTS  `' . $this->formName . '` (
            id INT(20) NOT NULL auto_increment,' . $fSql . '
            PRIMARY KEY (id)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;';
        return array(str_replace('<', '&lt;', $sql), $sql);
    }

    /**
     * Create success HTML page
     *
     * @return string
     */
    private function successBuilder() {
        $html = '
            <html>
                <head></head>
                <body>
                    <p class="valid">Your form has been sended !</p>
                </body>
            </html>';

        return $html;
    }

    // Addon - 2013-07-31
    /**
     * Add a plugin
     *
     * @param string $name field's name
     * @param bool $css if css is active, we charge css file for plugin
     */
    private function addPlugin($name, $css = true) {
        if ($css == true) {
            // Add css line
            $this->css[$name] = '
                <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/generator/plugins/' . $name . '.css" >';
        }
        // Add js line
        $this->js['jquery'] = '
            <script src="<?php echo base_url() ?>assets/js/generator/jquery_1.7.js"></script>';
        $this->js[$name] = '
            <script src="<?php echo base_url() ?>assets/js/generator/plugins/' . $name . '.js"></script>';
    }

    // End Addon

}

/* End of file welcome.php */
/* Location: ./application/controllers/generator.php */
