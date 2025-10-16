<?php

global $root_path;
global $db;
global $currentUid;

$banner_title = "Note";

$id = $_GET["id"] ?? null;

$note = $db->query("SELECT * FROM notes WHERE idnotes = :id", [
    "id" => $id,
])->findOrFail();

authorize($note['idusers'] != $currentUid, Response::FORBIDDEN);

require $root_path . "/views/note.view.php";
