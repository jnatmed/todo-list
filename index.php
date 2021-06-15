<?php

// echo "<pre>";
// var_dump($_SERVER);
// exit(0);

include 'setup.php';

try{
    $router->direct($request);
} catch (Error $e) {
    error_log($e);
    http_response_code(404);
    include "views/error.404.view.php";
}
