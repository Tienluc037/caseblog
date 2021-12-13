<?php

include_once "app/models/PostModel.php";

class PostController
{
    protected $PostModel;

    public function __construct()
    {
        $this->PostModel = new PostModel();
    }

    public function showAll()
    {
        $posts = $this->PostModel->getAll();
        include_once "app/view/post/list.php";
    }

    public function showByIdUser()
    {
     $posts = $this->PostModel->getByIdUser( $_SESSION["user"]["id"]);
     include_once "app/view/post/list.php";
    }


    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/view/post/add.php";
        } else {
            try {
                $this->PostModel->addTable($_REQUEST);
                header("location:index.php?page=post-list");
            } catch (PDOException $exception) {
                echo($exception->getMessage());
            }
        }
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $this->PostModel->deleteId($_REQUEST['id']);
            header("location:index.php?page=post-list");
        } else {
            header("location:index.php?page=post-list");
        }
    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->PostModel->getById($_REQUEST['id']);
            include_once "app/view/post/update.php";
        }
    }

    public function update()
    {
        if (isset($_REQUEST['id'])) {
            $this->PostModel->update($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

}