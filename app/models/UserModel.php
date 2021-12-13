<?php

include_once "BaseModels.php";

class UserModel extends BaseModels
{
    protected $table = "users";

    public function save($request)
    {
        $sql = "insert into $this->table (name ,email,password,birthday,country) values (?,?,?,?,?)";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request["name"]);
        $stmt->bindValue(2, $request["email"]);
        $stmt->bindValue(3, $request["password"]);
        $stmt->bindValue(4, $request["birthday"]);
        $stmt->bindValue(5, $request["country"]);
        $stmt->execute();
    }


    public function update($request)
    {
        $sql = "update $this->table set name = ?, email = ?, password = ?, birthday = ?, country = ? where id= ?";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request["name"]);
        $stmt->bindValue(2, $request["email"]);
        $stmt->bindValue(3, $request["password"]);
        $stmt->bindValue(4, $request["birthday"]);
        $stmt->bindValue(5, $request["country"]);
        $stmt->bindValue(6, $request["id"]);
        $stmt->execute();
    }

    public function checkLogin($email, $password)
    {
        $sql = "select * from $this->table where email=? and password=? ";

        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }


    public function getByEmail($email)
    {
        $sql = "select * from $this->table where email = '$email'";
        $stmt = $this->DbConnect->query($sql);
        return $stmt->fetch();
    }


    public function search($key)
    {
        $sql = "select * from $this->table where name like '%$key%'";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}