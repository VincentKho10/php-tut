<?php
require('Validator.php');
global $root_path;
global $db;

$banner_title = "Create Note";

// DELETE FROM `demo`.`notes` WHERE (`idnotes` = '13');
// INSERT INTO `demo`.`notes` (`body`, `idusers`) VALUES ('Somethin', '1');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    $validation = new Validator();
    
    foreach ($_POST as $key=>$value){
        if($validation->stringIsEmpty($value)){
            $errors[$key] = "field $key is required";
        }
        $_POST[$key] = htmlspecialchars($value);
    }

    if (strlen($_POST['body'])>=1000){
        $errors['body'] = "text exceeded by 1000 words";
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(`body`, `idusers`) VALUES (:body, :userid);", [
                "userid" => 1,
                ...$_POST
            ]);
        
    }
}

require $root_path . "/views/note-create.view.php";
