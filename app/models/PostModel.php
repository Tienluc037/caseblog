<?php
include_once "BaseModels.php";

class PostModel extends BaseModels
{
    protected $table = "posts";

    public function addTable($request)
    {
        $sql = "insert into $this->table (title,content,created_at,user_id,image) values (?,?,?,?,?)";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request['title']);
        $stmt->bindValue(2, $request['content']);
        $stmt->bindValue(3, $request['created_at']);
        $stmt->bindValue(4, $request['user_id']);
        $stmt->bindValue(5, $request['image']);
        $stmt->execute();
    }


    public function update($request)
    {
        $sql = "update $this->table set title = ?,content = ?, created_at = ?, user_id = ?, image = ? where id = ?";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request["title"]);
        $stmt->bindValue(2, $request["content"]);
        $stmt->bindValue(3, $request["created_at"]);
        $stmt->bindValue(4, $request["user_id"]);
        $stmt->bindValue(5, $request["image"]);
        $stmt->bindValue(6, $request["id"]);
        $stmt->execute();
    }


    public function getByIdUser($key)
    {
        $sql = "select * from $this->table where user_id like '%$key%'";
        $stmt = $this->DbConnect->query($sql);
        return $stmt->fetchAll();
    }
}