<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Form Generator for CodeIgniter</title>
        <meta name="title" content="Form Generator for CodeIgniter">
        <meta name="description" content="Form Generator for Codeigniter is a form builder for CodeIgniter developers. This tool generate validation rules for CodeIgniter and MVC CodeIgniter code.">
        <meta name="keywords" content="codeigniter form generator, form builder codeigniter, form generator codeigniter, form builder, automatic form codeigniter, generate form codigniter">
        <meta name="robots" content="index, nofollow,noarchive">
        <meta name="title" content="Un titre">
        <meta name="title" content="Un titre">
        
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/generator/style.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/generator/jqueryui.css">
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/generator/colorbox.css">
        <script src="<?=base_url()?>assets/js/generator/jquery_1.7.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/generator/jqueryui.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/generator/colorbox.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/generator/generator.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
            <h1><img src="<?=base_url()?>assets/css/generator/images/generator.png" alt="generator" />Form Generator for CodeIgniter 3</h1>
        </header>

        <section id="creator"> 
            <ul id="add">
                <li><span value="text">Input text</span></li>
                <li><span value="radio">Radio</span></li>
                <li><span value="checkbox">Checkbox</span></li>
                <li><span value="select">Select</span></li>
                <li><span value="textarea">Textarea</span></li>
                <li><span value="password">Password</span></li>
                <li><span value="file">File</span></li>
                <!--Addon V1.1-->
                <li><span value="date">Date</span></li>
                <li><span value="datetime">Datetime</span></li>
                <!--End Addon V1.1-->
                <li><span value="hidden">Hidden</span></li>
                <li><span value="reset">Reset</span></li>
                <li><span value="submit">Submit</span></li>
            </ul>
            <div style="text-align: center; margin-top: 10px">
                <a href="#" class="aButton valid_field">
                    <span class="aButtonText">Build form</span> 
                    <span class="aButtonIcon"><span></span></span>
                </a>
                <a href="#" class="aButton create_files">
                    <span class="aButtonText">Create files in my CodeIgniter project</span> 
                    <span class="aButtonIcon"><span></span></span>
                </a>
                <a href="#" class="aButton create_db">
                    <span class="aButtonText">Create tables in database</span> 
                    <span class="aButtonIcon"><span></span></span>
                </a>
                <a href="#settings" class="settingBtn">
                    <span class="settingBtnText">Settings</span> 
                    <span class="settingBtnIcon"><span></span></span>
                </a>
            </div>
            <div id="errors">

            </div>
            <div id="code">
                <h3>Controller code <span class="updated"></span></h3>
                <div id="controller" style="display:none">
                    <pre><code type="php"></code></pre>
                </div>
                <h3>Model code <span class="updated"></span></h3>
                <div id="model" style="display:none">
                    <pre><code type="php"></code></pre>
                </div>
                <h3>View code <span class="updated"></span></h3>
                <div id="view" style="display:none">
                    <pre><code type="html"></code></pre>
                </div>
                <h3>SQL code <span class="updated"></span></h3>
                <div id="sql" style="display:none">
                    <pre><code type="sql"></code></pre>
                </div>
            </div>

            <!--Live config-->
            <div id="config" class="column"></div>


            <!-- Settings -->
            <div style="display:none">
                <div id="settings">
                    <h3>Change form settings</h3>
                    <p>
                        <label>Change form name</label>
                        <input type="text" id="formName" value="myform" />
                    </p>
                    <p>
                        <label>Change css file name</label>
                        <input type="text" id="cssName" value="style" />.css
                    </p>
                    <input type="submit" class="saveSettings" value="Save">
                </div>
            </div>


            <!--Templates-->
            <div id="config_text" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <input type="text" />
                    <span class='delete_field'></span>
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="text">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input text informations</h3>
                            <p>
                                <label for="text_name">Name *</label>
                                <input type="text" class="text_name" value="myfieldname" />
                                <label for="text_label">Label *</label>
                                <input type="text" class="text_label" value="myfieldlabel" />
                                <label for="text_value">Value</label>
                                <input type="text" class="text_value" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_radio" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <div class="title_radio">
                        <input type="radio" /> <span class="title_value">myfirstoption</span>
                        <input type="radio" /> <span class="title_value">mysecondoption</span>
                        <input type="radio" /> <span class="title_value">mythirdoption</span>
                    </div>
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="radio">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input radio informations</h3>
                            <p>
                                <label for="radio_name">Name *</label>
                                <input type="text" class="radio_name" value="myfieldname" />
                                <label for="radio_label">Label *</label>
                                <input type="text" class="radio_label" value="myfieldlabel" />
                            </p>
                            <h3>Radio buttons</h3>
                            <a href="#" class="addOption" compt="1">Add radio</a>
                            <p class="option">
                                <label for="select_option">Radio *</label>
                                <input type="text" class="select_option" value="myfirstoption" />
                                <span class="deleteOption"></span>
                            </p>
                            <p class="option">
                                <label for="select_option">Radio *</label>
                                <input type="text" class="select_option" value="mysecondoption" />
                                <span class="deleteOption"></span>
                            </p>
                            <p class="option">
                                <label for="select_option">Radio *</label>
                                <input type="text" class="select_option" value="mythirdoption" />
                                <span class="deleteOption"></span>
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_checkbox" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <div class="title_checkbox">
                        <input type="checkbox" /> <span class="title_value">myfirstoption</span>
                        <input type="checkbox" /> <span class="title_value">mysecondoption</span>
                        <input type="checkbox" /> <span class="title_value">mythirdoption</span>
                    </div>
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="checkbox">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input checkbox informations</h3>
                            <p>
                                <label for="checkbox_name">Name *</label>
                                <input type="text" class="checkbox_name" value="myfieldname" />
                                <label for="checkbox_label">Label *</label>
                                <input type="text" class="checkbox_label" value="myfieldlabel" />
                            </p>
                            <h3>Checkboxes</h3>
                            <a href="#" class="addOption" compt="1">Add checkboxe</a>
                            <p class="option">
                                <label for="select_option">Checkbox *</label>
                                <input type="text" class="select_option" value="myfirstoption" />
                                <span class="deleteOption"></span>
                            </p>
                            <p class="option">
                                <label for="select_option">Checkbox *</label>
                                <input type="text" class="select_option" value="mysecondoption" />
                                <span class="deleteOption"></span>
                            </p>
                            <p class="option">
                                <label for="select_option">Checkbox *</label>
                                <input type="text" class="select_option" value="mythirdoption" />
                                <span class="deleteOption"></span>
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_password" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <input type="password" /> 
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="password">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input password informations</h3>
                            <p>
                                <label for="password_name">Name *</label>
                                <input type="text" class="password_name" value="myfieldname" />
                                <label for="password_label">Label *</label>
                                <input type="text" class="password_label" value="myfieldlabel" />
                                <label for="password_value">Value</label>
                                <input type="text" class="password_value" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_hidden" style="display : none">
                <div class="portlet-header">
                    <label class="title_label"></label>
                    <input type="hidden" /> 
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="hidden">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input hidden informations</h3>
                            <p>
                                <label for="hidden_name">Name *</label>
                                <input type="text" class="hidden_name" value="myfieldname" />
                                <label for="hidden_label">Label</label>
                                <input type="text" class="hidden_label" value="" />
                                <label for="hidden_value">Value</label>
                                <input type="text" class="hidden_value" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_reset" style="display : none">
                <div class="portlet-header">
                    <input type="reset" class="title_value" value="reset" />
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="reset">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Reset informations</h3>
                            <p>
                                <label for="reset_name">Name *</label>
                                <input type="text" class="reset_name" value="myfieldname" />
                                <input type="hidden" class="reset_label" value="" />
                                <label for="reset_value">Value *</label>
                                <input type="text" class="reset_value" value="reset" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_submit" style="display : none">
                <div class="portlet-header">
                    <input type="submit" class="title_value" value="submit" />
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="submit">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Submit informations</h3>
                            <p>
                                <label for="submit_name">Name *</label>
                                <input type="text" class="submit_name" value="myfieldname" />
                                <input type="hidden" class="submit_label" value="" />
                                <label for="submit_value">Value *</label>
                                <input type="text" class="submit_value" value="submit" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_select" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <select>
                        <option>myfirstoption</option>
                        <option>mysecondoption</option>
                        <option>mythirdoption</option>
                    </select>
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="select">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Select informations</h3>
                            <p>
                                <label for="select_name">Name *</label>
                                <input type="text" class="select_name" value="myfieldname" />
                                <label for="select_label">Label *</label>
                                <input type="text" class="select_label" value="myfieldlabel" />
                            </p>
                            <h3>Options</h3>
                            <a href="#" class="addOption" compt="1">Add option</a>
                            <p class="option">
                                <label for="select_option">Option *</label>
                                <input type="text" class="select_option" value="myfirstoption" />
                                <span class="deleteOption"></span>
                            </p>
                            <p class="option">
                                <label for="select_option">Option *</label>
                                <input type="text" class="select_option" value="mysecondoption" />
                                <span class="deleteOption"></span>
                            </p>
                            <p class="option">
                                <label for="select_option">Option *</label>
                                <input type="text" class="select_option" value="mythirdoption" />
                                <span class="deleteOption"></span>
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_textarea" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <textarea></textarea>
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="textarea">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Textarea informations</h3>
                            <p>
                                <label for="textarea_name">Name *</label>
                                <input type="text" class="textarea_name" value="myfieldname" />
                                <label for="textarea_label">Label *</label>
                                <input type="text" class="textarea_label" value="myfieldlabel" />
                                <label for="textarea_value">Value</label>
                                <input type="text" class="textarea_value" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_file" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <input type="file" />
                    <span class='delete_field'></span>                     
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="file">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>File informations</h3>
                            <p>
                                <label for="file_name">Name *</label>
                                <input type="text" class="file_name" value="myfieldname" />
                                <label for="file_label">Label *</label>
                                <input type="text" class="file_label" value="myfieldlabel" />
                                <label for="file_label">Auth formats (if 0 selected = no control on file format)</label>
                                <select multiple size="5" class="file_format">
                                    <option value="jpg">jpg</option>
                                    <option value="jpeg">jpeg</option>
                                    <option value="gif">gif</option>
                                    <option value="png">png</option>
                                    <option value="bmp">bmp</option>
                                    <option value="pdf">pdf</option>
                                    <option value="doc">doc</option>
                                    <option value="xls">xls</option>
                                </select>
                                <label for="maxfilesize">Max file size</label>
                                <select class="maxfilesize" id="maxfilesize">
                                    <option value="1">1 Mo</option>
                                    <option value="2">2 Mo</option>
                                    <option value="3">3 Mo</option>
                                    <option value="4">4 Mo</option>
                                    <option value="6">6 Mo</option>
                                    <option value="8">8 Mo</option>
                                    <option value="10">10 Mo</option>
                                    <option value="20">20 Mo</option>
                                </select>
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--Addon V1.1 - 2013-07-31-->
            <div id="config_date" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <input type="text" />
                    <span class='delete_field'></span>
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="date">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input date informations</h3>
                            <p>
                                <label for="date_name">Name *</label>
                                <input type="text" class="date_name" value="myfieldname" />
                                <label for="date_label">Label *</label>
                                <input type="text" class="date_label" value="myfieldlabel" />
                                <label for="date_value">Value</label>
                                <input type="text" class="date_value" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="config_datetime" style="display : none">
                <div class="portlet-header">
                    <label class="title_label">myfieldlabel</label>
                    <input type="text" />
                    <span class='delete_field'></span>
                    <span class='edit_field'></span>
                </div>
                <div class="portlet-content" style="display:none" type="datetime">
                    <div class="tab">
                        <ul>
                            <li><a href="#tabs-1">Informations</a></li>
                            <li><a href="#tabs-2">Database</a></li>
                            <li><a href="#tabs-3">Validation rules</a></li>
                        </ul>
                        <div id="tabs-1">
                            <h3>Input datetime informations</h3>
                            <p>
                                <label for="datetime_name">Name *</label>
                                <input type="text" class="datetime_name" value="myfieldname" />
                                <label for="datetime_label">Label *</label>
                                <input type="text" class="datetime_label" value="myfieldlabel" />
                                <label for="datetime_value">Value</label>
                                <input type="text" class="datetime_value" />
                            </p>
                        </div>
                        <div id="tabs-2">
                            <h3>Database</h3>
                            <p>
                                <input type="checkbox" class="add_database" value="1" /> Add to database ?
                            </p>
                            <p class="database_infos" style="visibility: hidden">
                                <?php $this->load->view('generator/form_helper/database_fields'); ?>
                            </p>
                        </div>
                        <div id="tabs-3">
                            <h3>CodeIgniter validation rules</h3>
                            <?php $this->load->view('generator/form_helper/validation_rules'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Addon V1.1-->

        </section>
        <footer>
            <p>Form Generator for Codeigniter is a form builder for CodeIgniter developers. This tool generate validation rules for CodeIgniter and MVC CodeIgniter code.</p>
            <input type="hidden" id="base_url" value="<?= base_url() ?>" />
        </footer>
    </body>
</html>