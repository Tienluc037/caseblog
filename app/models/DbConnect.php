<?php

class DbConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=demo-mvc;charset=utf8";
        $this->username = "luc";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            return $conn;
        } catch (PDOException $exception) {
            exit($exception->getMessage());
        }
    }


}