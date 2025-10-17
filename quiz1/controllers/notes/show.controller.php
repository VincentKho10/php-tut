<?php

use Core\Response;

global $db;
global $currentUid;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["id"] ?? null;

    $note = $db->query("SELECT * FROM notes WHERE idnotes = :id", [
        "id" => $id,
    ])->findOrFail();

    authorize($note['idusers'] != $currentUid, Response::FORBIDDEN);
    
    $db->query("DELETE FROM notes WHERE idnotes=:id",[
        "id"=>$_POST['delete_id']
    ]);
    
    header('location: /notes');
    exit();
} else {
    $id = $_GET["id"] ?? null;

    $note = $db->query("SELECT * FROM notes WHERE idnotes = :id", [
        "id" => $id,
    ])->findOrFail();

    authorize($note['idusers'] != $currentUid, Response::FORBIDDEN);

    view("notes/show.view.php", [

        "banner_title" => "Note",
        "note" => $note
    ]);
}
