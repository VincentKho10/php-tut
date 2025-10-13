<?php

global $root_path;
global $db;

$banner_title = "Note";

$id = $_GET["id"] ?? null;
$currentUid = 1;

$note = $db->query("SELECT * FROM notes WHERE idnotes = :id", [
    "id" => $id
])->fetch();

if (! $note) {
    abort();
}

if ($note['idusers'] != $currentUid){
    abort(403);
}

require $root_path . "/views/note.view.php";
