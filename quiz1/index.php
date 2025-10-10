<?php

$selected_style = "bg-gray-900 dark:bg-gray-950/50 text-white";
$not_selected_style = "text-gray-300 hover:bg-white/5 hover:text-white";

$business = [
    'name' => 'Laracast',
    'cost' => 15,
    'categories' => ["Testing", "PHP", "JavaScript"]
];

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$uri_get_query = parse_url($_SERVER["REQUEST_URI"])["query"] ?? "";

require "functions.php";
// require "router.php";
// dd($uri_get_query);

$dsn = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', "G00gle.com");

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>". $post['title'] ."</li>";
}
dd($posts);