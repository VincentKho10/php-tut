<?php
namespace Core;

class Validator
{
    public static function string($value,$min=1,$max=INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public function stringCharLength($value,$min=1,$max=1000)
    {
        if (strlen($value) >= $max) {
            $errors['body'] = "text exceeded by 1000 characters";
        }
        if (strlen($value) <= $min) {
            $errors['body'] = "text lesser than 1 characters";
        }
    }

    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
