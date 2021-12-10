<?php
include_once "BaseModels.php";

class PostModel extends BaseModels
{
    protected $table = "posts";

    public function addTable($request)
    {
        $sql = "insert into $this->table (title,content,created_at) values (?,?,?)";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request['title']);
        $stmt->bindValue(2, $request['content']);
        $stmt->bindValue(3, $request['created_at']);
        $stmt->execute();
    }


    public function update($request)
    {
        $sql = "update $this->table set title = ?,content = ?, created_at = ? where id = ?";
        $stmt = $this->DbConnect->prepare($sql);
        $stmt->bindValue(1, $request["title"]);
        $stmt->bindValue(2, $request["content"]);
        $stmt->bindValue(3, $request["created_at"]);
        $stmt->bindValue(4, $request["id"]);
        $stmt->execute();
    }
}