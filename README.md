# BuildIgniter
Codeigniter Form Builder - Auto Generate Form validation &amp; database

[Online Demo](http://buildigniter.devtoo.fr)

BuildIgniter is an opensource project, to create forms / form validation / databases tables for CodeIgniter quickly.

Everyone can install, share, or participate to this project.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Special thanks to Codeigniter for this amazing framework (https://github.com/bcit-ci/CodeIgniter) & to CoreUI for their opensource template (https://github.com/coreui/coreui-free-bootstrap-admin-template)

## Table of Contents

* [Installation](#installation)
* [Configure](#configure)
* [How to Use](#how-to-use)



## Installation

### Clone repo

``` bash
# clone repo
$ git clone https://github.com/AdrienV/BuildIgniter.git MyProjectName

# go to your new project
$ cd MyProjectName

# install dependencies for the template
$ npm install
```

### Launch the project
If you don't have any server, install WAMP / MAMP (http://www.wampserver.com/) and drag sources in the /www folder
``` bash
# launch your project in your browser
(http://localhost/MyProjectName)
```
/!\ You will get errors at this step, you need to configure your database /!\

## Configure

### Database
Open the file ``` /application/config/database.php``` and insert your database informations

``` sql
....
'hostname' => 'your_host_name',
'username' => 'your_user_name',
'password' => 'your_password',
'database' => 'your_project_database_name',
....
```

### Project management
1 - Make sure you have this folder in 775 : /buildigniter_creator/
2 - Open /application/config.php and set the variables "clean_folders" & "clean_folders_time"
3 - Create a CRON on your server to delete OLD folders created (IMPORTANT), each loading create a new folder in "/buildigniter_creator/", to be sure your server keep clean, create your cron each 2 or 3 hours :

``` 
php /your_project_path/index.php buildigniter cleanFolders
```



## How To Use

### Create your form

Use the left menu to add elements

### Generate Code

Click on "Build Form", and check the different codes generated : Controller / Model / View / SQL

### Add files in your project automatically
```
Make sure your folders have permissions to write
- application/controller
- application/model
- application/view
```

Click on "Create Files", your new files are automatically created in your Codeigniter project

### Add tables in your database automatically


Click on "Create Tables", your new tables are automatically created in your database to work with your files previously created



## Enjoy ! ;)