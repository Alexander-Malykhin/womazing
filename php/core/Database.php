<?php

class Database
{
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $dbname = "womazing";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    }

    public function getConnection(): mysqli
    {
        try {
            $this->conn->set_charset("utf8");
            return $this->conn;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}