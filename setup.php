<?php

include 'core/Router.php';
include 'core/Request.php';
include 'core/Config.php';
include 'core/Controller.php';
include 'models/ToDoListModel.php';
include 'models/TaskModel.php';
include 'controllers/ToDoListController.php';
include 'controllers/TaskController.php';
include 'controllers/ConfigController.php';

use App\core\Router;
use App\core\Request;
use App\core\Config;

$config = new Config;

$router = new Router;
$router->define([
    'GET /' => 'ToDoListController@index',
    'GET /new_task' => 'TaskController@new',
    'POST /save_task' => 'TaskController@save',
    'GET /edit_config' => 'ConfigController@edit',
    'POST /save_config' => 'ConfigController@save',
]);

$request = new Request;
