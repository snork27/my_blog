<?php

class DB
{
    public $db_host = 'db';
    public $db_user = 'dev_user';
    public $db_password = 'devpass';
    public $db_db = 'dev_db';
    public $db_port = 3306;

    public $getDb;

    public function __construct(){
        $this->getDb = new mysqli(
            $this->db_host,
            $this->db_user,
            $this->db_password,
            $this->db_db,
            $this->db_port
        );
    }
}
