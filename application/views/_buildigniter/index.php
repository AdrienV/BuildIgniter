<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.11
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>CoreUI Free Bootstrap Admin Template</title>
        <!-- Icons-->
        <link href="<?php echo base_url() ?>node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <!-- Main styles for this application-->
        <link href="<?php echo base_url() ?>template_core_ui/src/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>template_core_ui/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics-->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            // Shared ID
            gtag('config', 'UA-118965717-3');
            // Bootstrap ID
            gtag('config', 'UA-118965717-5');
        </script>
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <header class="app-header navbar">
            <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <i class="icons font-2xl d-block cui-layers"></i>&nbsp;BuildIgniter
            </a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>
        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-title">Add Component</li>
                        <li class="nav-item nav-dropdown add">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon cui-note"></i> Basics</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="text">
                                        <i class="nav-icon cui-pencil"></i> Text Input</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="select">
                                        <i class="nav-icon cui-options"></i> Select / Opt</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="radio">
                                        <i class="nav-icon cui-circle-check"></i> Radio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="checkbox">
                                        <i class="nav-icon cui-check"></i> Checkbox</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="textarea">
                                        <i class="nav-icon cui-align-center"></i> Textarea</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="password">
                                        <i class="nav-icon cui-lock-locked"></i> Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="hidden">
                                        <i class="nav-icon cui-ban"></i> Hidden</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown add">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon cui-dashboard"></i> Advanced</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="file">
                                        <i class="nav-icon cui-cloud-upload"></i> Upload File</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="date">
                                        <i class="nav-icon cui-calendar"></i> Date</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="datetime">
                                        <i class="nav-icon cui-calendar"></i> Date Time</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown add">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon cui-check"></i> Buttons</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="submit">
                                        <i class="nav-icon cui-circle-check"></i> Submit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" value="reset">
                                        <i class="nav-icon cui-circle-x"></i> Reset</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mt-auto">
                            <a class="nav-link nav-link-success valid_field" href="#" target="_top">
                                <i class="nav-icon cui-code"></i> Build code <i class="nav-icon cui-chevron-right mt-1 float-right"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-info create_files" href="#" target="_top">
                                <i class="nav-icon icon-cloud-upload"></i> Create files <br /><small><i>Automatically in sources</i></small>
                            </a>
                        </li>
                        <li class="nav-item create_db">
                            <a class="nav-link nav-link-warning" href="#" target="_top">
                                <i class="nav-icon icon-list"></i> Create Tables <br /><small><i>Automatically in database</i></small>
                            </a>
                        </li>
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>
            <main class="main">
                <!-- Breadcrumb-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Generate Codeigniter Form</li>
                    <!-- Breadcrumb Menu-->
                    <li class="breadcrumb-menu d-md-down-none">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <a class="btn settingBtn" href="#">
                                <i class="icon-settings"></i>  Settings</a>
                        </div>
                    </li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- NO CODE, FIRST LAUNCH -->
                            <div class="no_code" style="margin: auto; vertical-align: middle; text-align: center">
                                <h2 class="text-right text-info"><i class="icons font-2xl cui-cog"></i> Change settings <i class="icons font-2xl cui-chevron-top"></i></h2>
                                <h1 class="text-info"><i class="icons font-5xl cui-layers"></i></h1>
                                <h1 class="text-info"><i class="icons font-2xl cui-chevron-left"></i> Add a component</h1>
                            </div>

                            <!-- CODE GENERATED TOP -->
                            <div class="row" id="code" style="display: none">
                                <!--CONTROLLER-->
                                <div class="col-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body p-0 d-flex align-items-center">
                                            <i class="icons cui-cog p-3 bg-primary font-2xl mr-3"></i> 
                                            <div>
                                                <div class="text-value-sm text-primary">Controller</div>
                                                <div class="text-muted text-uppercase font-weight-bold small"><span class="code_lines"></span>l <span class="code_status"></span></div>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3 py-2">
                                            <a class="btn-block text-muted d-flex justify-content-between align-items-center" style="cursor: pointer" data-toggle="modal" data-target="#controller"
                                               <span class="small font-weight-bold">View code</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--Controller MODAL-->
                                <div class="modal fade" id="controller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Controller code</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea id="code_content_controller" style="display: none"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--MODEL-->
                                <div class="col-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body p-0 d-flex align-items-center">
                                            <i class="icons cui-layers bg-info p-3 font-2xl mr-3"></i>
                                            <div>
                                                <div class="text-value-sm text-info">Model</div>
                                                <div class="text-muted text-uppercase font-weight-bold small"><span class="code_lines"></span>l <span class="code_status"></span></div>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3 py-2">
                                            <a class="btn-block text-muted d-flex justify-content-between align-items-center" style="cursor: pointer" data-toggle="modal" data-target="#model"
                                               <span class="small font-weight-bold">View code</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!--Model MODAL-->
                                <div class="modal fade" id="model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Model code</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea id="code_content_model" style="display: none"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--VIEW-->
                                <div class="col-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body p-0 d-flex align-items-center">
                                            <i class="icons cui-dashboard bg-warning p-3 font-2xl mr-3"></i>
                                            <div>
                                                <div class="text-value-sm text-warning">View</div>
                                                <div class="text-muted text-uppercase font-weight-bold small"><span class="code_lines"></span>l <span class="code_status"></span></div>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3 py-2">
                                            <a class="btn-block text-muted d-flex justify-content-between align-items-center" style="cursor: pointer" data-toggle="modal" data-target="#view"
                                               <span class="small font-weight-bold">View code</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!--View MODAL-->
                                <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">View code</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea id="code_content_view" style="display: none"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--SQL-->
                                <div class="col-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body p-0 d-flex align-items-center">
                                            <i class="icons cui-options bg-danger p-3 font-2xl mr-3"></i>
                                            <div>
                                                <div class="text-value-sm text-danger">SQL</div>
                                                <div class="text-muted text-uppercase font-weight-bold small"><span class="code_lines"></span>l <span class="code_status"></span></div>
                                            </div>
                                        </div>
                                        <div class="card-footer px-3 py-2">
                                            <a class="btn-block text-muted d-flex justify-content-between align-items-center" style="cursor: pointer" data-toggle="modal" data-target="#sql"
                                               <span class="small font-weight-bold">View code</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!--Sql MODAL-->
                                <div class="modal fade" id="sql" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">SQL code</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea id="code_content_sql" style="display: none"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FORM BUILDER -->
                            <div class="card" style="" id="builder">
                                <div class="card-header">
                                    <strong>Form Builder</strong>
                                    <small></small>
                                </div>
                                <div class="card-body">
                                    <!--Live config-->
                                    <div id="config" class="column"></div>

                                    <!--Templates-->
                                    <div id="config_text" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_radio" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <div class="title_radio">
                                                    <input type="radio" /> <span class="title_value">myfirstoption</span>
                                                    <input type="radio" /> <span class="title_value">mysecondoption</span>
                                                    <input type="radio" /> <span class="title_value">mythirdoption</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_checkbox" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <div class="title_radio">
                                                    <input type="checkbox" /> <span class="title_value">myfirstoption</span>
                                                    <input type="checkbox" /> <span class="title_value">mysecondoption</span>
                                                    <input type="checkbox" /> <span class="title_value">mythirdoption</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_password" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <input class="form-control" type="password">
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_hidden" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <input class="form-control" type="hidden">
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_reset" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <input type="reset" class="btn btn-secondary" value="reset" />
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_submit" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <input type="submit" class="btn btn-primary title_value" value="submit" />
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_select" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <select class="form-control">
                                                    <option>myfirstoption</option>
                                                    <option>mysecondoption</option>
                                                    <option>mythirdoption</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_textarea" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_file" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <input type="file" class="form-control" />
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Addon V1.1 - 2013-07-31-->
                                    <div id="config_date" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="config_datetime" style="display : none">
                                        <div class="portlet-header row">
                                            <div class="col-md-1 pt-4">
                                                <i class=" font-2xl fa fa-arrows-v text-muted"></i>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label class="title_label">myfieldlabel</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="col-md-3 text-right pt-5">
                                                <span class='edit_field text-info mr-2' style="cursor: pointer"><i class="icons cui-pencil font-2xl mt-5 cui-bold"></i> <span style="top: -5px">EDIT</span></span>
                                                <span class='delete_field text-danger' style="cursor: pointer"><i class="icons cui-circle-x font-2xl mt-5 cui-bold"></i> <span style="top: -5px">DELETE</span></span>
                                            </div>
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
                                                    
                                                    <div class="alert alert-secondary">
                                                        <i class="icons cui-lightbulb"></i> To apply your params > Build Form 
                                                    </div>
                                                </div>
                                                <div id="tabs-2">
                                                    <h3>Database</h3>
                                                    <p>
                                                        <input type="checkbox" class="add_database" value="1" /> Add to database ?
                                                    </p>
                                                    <p class="database_infos" style="visibility: hidden">
                                                        <?php $this->load->view('_buildigniter/form_helper/database_fields'); ?>
                                                    </p>
                                                </div>
                                                <div id="tabs-3">
                                                    <h3>CodeIgniter validation rules</h3>
                                                    <?php $this->load->view('_buildigniter/form_helper/validation_rules'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Addon V1.1-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








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
            </main>
        </div>
        <footer class="app-footer">
            <div class="ml-auto">
                <span>Powered by</span>
                <a href="http://www.devtoo.fr">Devtoo</a>
            </div>
        </footer>
        <!--CONSTANTS-->
        <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
        <!-- CoreUI and necessary plugins-->
        <script src="<?php echo base_url() ?>node_modules/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url() ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>node_modules/pace-progress/pace.min.js"></script>
        <script src="<?php echo base_url() ?>node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() ?>node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
        <!-- Plugins and scripts required by this view-->
        <script src="<?php echo base_url() ?>node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>node_modules/codemirror/lib/codemirror.css">
        <script src="<?php echo base_url() ?>node_modules/codemirror/lib/codemirror.js"></script>
        <script src="<?php echo base_url() ?>template_core_ui/src/js/main.js"></script>
        <!-- BuildIgniter-->
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/generator/jqueryui.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/generator/colorbox.css">
        <script type="text/javascript" src="<?= base_url() ?>assets/js/generator/jqueryui.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/generator/colorbox.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/generator/generator.js"></script>
    </body>
</html>
