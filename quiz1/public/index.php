<?php
const BASE_PATH = __DIR__ . '/../';
$selected_style = "bg-gray-900 dark:bg-gray-950/50 text-white";
$not_selected_style = "text-gray-300 hover:bg-white/5 hover:text-white";
$currentUid = 1;

$business = [
    'name' => 'Laracast',
    'cost' => 15,
    'categories' => ["Testing", "PHP", "JavaScript"]
];

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$uri_get_query = parse_url($_SERVER["REQUEST_URI"])["query"] ?? "";
use Core\functions;
require BASE_PATH . "Core/functions.php";

$ENV = require basePath('config.php');

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require basePath("{$class}.php");
});

// require basePath("Database.php");
// require basePath("Response.php");

$db = initDemoDatabase();
// dd($uri_get_query);


require basePath("Core/router.php");
