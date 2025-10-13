<?php

global $root_path;
global $db;

$banner_title = "Notes";

$notes = $db->query("SELECT * FROM notes")->fetchAll();

require $root_path . "/views/notes.view.php";
