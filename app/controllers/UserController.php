<?php
include_once "app/models/UserModel.php";

class UserController
{
    protected $UsersModel;

    public function __construct()
    {
        $this->UsersModel = new UserModel();
    }

    public function showAll()
    {
        $users = $this->UsersModel->getAll();
        include_once "app/view/User/list.php";
    }


    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/view/User/create.php";
        } else {
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
            try {
                $this->UsersModel->save($_REQUEST);
                header("location:index.php?page=user-list");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $this->UsersModel->deleteId($_REQUEST['id']);
            header("location:index.php?page=user-list");
        } else {
            header("location:index.php?user-list");
        }
    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $user = $this->UsersModel->getById($_REQUEST['id']);
            include_once "app/view/User/update.php";
        }
    }


    public function update()
    {
        if (isset($_REQUEST["id"])) {
            $user = $this->UsersModel->getById($_REQUEST["id"]);
            $_REQUEST["image"] = $user->image;
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
            $this->UsersModel->update($_REQUEST);
            header("Location:index.php?page=user-list");
        }
    }


    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $users = $this->UsersModel->search($_REQUEST['search']);
            include_once "app/view/User/list.php";
        }
    }
}