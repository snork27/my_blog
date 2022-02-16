<?php

require_once 'DB.php';

class User{

    public $id;
    public $name;
    public $nickname;
    public $email;

    public function getOne($id = null){
        $db = new DB();
        $result = $db->getDb->query("SELECT * FROM users WHERE id = {$id}");
        $row = $result->fetch_assoc();
        foreach ($row as $key => $val) {
            $this->$key = $val;
        }
    }
}