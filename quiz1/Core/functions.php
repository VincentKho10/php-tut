<?php
use Core\Database;
use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    
    die();
}

function register($user)
{
    // create the user record in the db
    // Log them in.
    // Send a welcome email.
    // Redirect to their new dashboard.
}

// $uri = $_SERVER["REQUEST_URI"];
function uriIs($path) {
    global $selected_style, $not_selected_style;
    // $selected_style = $GLOBALS["selected_style"];
    // $not_selected_style = $GLOBALS["not_selected_style"];
    return $_SERVER["REQUEST_URI"] === $path ? $selected_style : $not_selected_style;
};

function abort($code=404){
    
    http_response_code($code);
    require basePath("views/err/$code.php");
    die();
}

function initDemoDatabase(){
    global $ENV;
    $dbconf = $ENV['database_cfg'];
    $dbcred = $ENV['db_cred'];
    return new Database($dbconf, $dbcred['username'], $dbcred['password']);
}

function authorize($condition, $status=Response::FORBIDDEN){
    if($condition){
        abort($status);
    }
}

function basePath($path){
    return BASE_PATH . $path;
}

function view($path, $attributes=[]){
    extract($attributes);
    require basePath("views/".$path);
}