<?php

class Validator
{
    public function stringIsEmpty($value){
        return strlen($value)===0;
    }
}