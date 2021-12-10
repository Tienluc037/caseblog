<?php
include_once "DbConnect.php";

class BaseModels
{
    protected $DbConnect;
    protected $table;

    public function __construct()
    {
        $dt = new DbConnect();
        $this->DbConnect = $dt->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->DbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id=" . $id;
        $stmt = $this->DbConnect->query($sql);
        return $stmt->fetch();
    }

    public function deleteId($id)
    {
        $sql = "delete from $this->table where id=" . $id;
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->execute();
    }
}