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
            try {
                $this->UsersModel->save($_REQUEST);
                header("location:index.php");
            } catch (PDOException $exception) {
                echo($exception->getMessage());
            }
        }
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $this->UsersModel->deleteId($_REQUEST['id']);
            header("location:index.php");
        } else {
            header("location:index.php");
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
        if (isset($_REQUEST['id'])) {
            $this->UsersModel->update($_REQUEST);
            header("location:index.php?page=user-list");
        }
    }

}