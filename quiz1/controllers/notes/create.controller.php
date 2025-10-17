<?php

global $db;

use Core\Validator;

$errors = [];
$validation = new Validator();
$whitelists = ["body"];
// DELETE FROM `demo`.`notes` WHERE (`idnotes` = '13');
// INSERT INTO `demo`.`notes` (`body`, `idusers`) VALUES ('Somethin', '1');
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    foreach ($whitelists as $whitelist) {
        $value = $_POST[$whitelist];

        if ($whitelist == "email") {
            if (! Validator::email($value)) {
                $errors[$whitelist] = "email format are not valid";
            }
        }

        if (! Validator::string($value, 1, 1000)) {
            $errors[$whitelist] = "field $whitelist is required, also under 1000 characters required";
        }
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes(`body`, `idusers`) VALUES (:body, :userid);", [
            "userid" => 1,
            ...$_POST
        ]);
        $_POST["body"] = '';
        header('location: /notes');
        exit();
    }
}

view("notes/create.view.php", [
    "banner_title" => "Create Notes",
    "errors" => $errors
]);
