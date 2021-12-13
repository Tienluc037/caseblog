<?php

include_once "app/models/PostModel.php";

class PostController
{
    protected $PostModel;

    public function __construct()
    {
        $this->PostModel = new PostModel();
    }

//    public function showAll()
//    {
//        $posts = $this->PostModel->getAll();
//        include_once "app/view/post/list.php";
//    }

    public function showByIdUser()
    {
     $posts = $this->PostModel->getByIdUser( $_SESSION["user"]["id"]);
     include_once "app/view/post/list.php";
    }


    public function add()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            include_once "app/view/post/add.php";
        }else{
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "upload khong thanh cong";
                }
            }
            try{
                $this->PostModel->addTable($_REQUEST);
                header("location:index.php?page=post-list");
            }catch (PDOException $e){
                echo $e->getMessage();
            }

        }
    }
//    public function add()
//    {
//        if ($_SERVER["REQUEST_METHOD"] == "GET") {
//            include_once "app/view/post/add.php";
//        } else {
//            try {
//                $this->PostModel->addTable($_REQUEST);
//                header("location:index.php?page=post-list");
//            } catch (PDOException $exception) {
//                echo($exception->getMessage());
//            }
//        }
//    }

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

//    public function update()
//    {
//        if (isset($_REQUEST['id'])) {
//            $this->PostModel->update($_REQUEST);
//            header("location:index.php?page=post-list");
//        }
//    }


    public function update()
    {
        if(isset($_REQUEST["id"])){
            $post = $this->PostModel->getById($_REQUEST["id"]);
            var_dump($_REQUEST["image"]);
            die();
            $_REQUEST["image"] = $post->image;
            var_dump($_REQUEST["image"]);
            die();
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "upload khong thanh cong";
                }
            }
            $this->PostModel->update($_REQUEST);
            header("Location:index.php?page=post-list");
        }
    }
    public function detailPost()
    {
        if (isset($_REQUEST['id'])){
            $post = $this->PostModel->getById($_REQUEST['id']);
            include_once "app/view/post/detail.php";
        }
    }
}