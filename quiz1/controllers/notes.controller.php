<?php

global $root_path;
global $db;
global $currentUid;

$banner_title = "Notes";

$notes = $db->query("SELECT * FROM notes")->findAllOrFail();

require $root_path . "/views/notes.view.php";
