<?php
function validateRegister(array $data)
{

    $errors = [];

    if(empty($data["username"])){
        $errors["username"] = true;
    }

    if(empty($data["login"])){
        $errors["login"] = true;
    }

    if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)){
        $errors["email"] = true;
    }

    if(empty($data["password"])){
        $errors["password"] = true;
    }
    
    return $errors;
}
?>