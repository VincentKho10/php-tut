<?php


global $db;
global $currentUid;

$notes = $db->query("SELECT * FROM notes")->findAllOrFail();

view("notes/index.view.php", [
    "banner_title" => "Notes",
    "notes" => $notes,
]);
