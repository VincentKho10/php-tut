<?php

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
$ENV = require('config.php');

require "Database.php";
require "functions.php";
require "Response.php";

$db = initDemoDatabase();
// dd($uri_get_query);


require "router.php";