<?php
include_once "app/models/UserModel.php";

class AuthController
{
    protected $UsersModel;

    public function __construct()
    {
        $this->UsersModel = new UserModel();
    }

    public function showFormLogin()
    {
        include_once "app/view/auth/login.php";
    }

    public function login($request)
    {
        $email = $request['email'];
        $password = $request['password'];

        if ($this->UsersModel->checkLogin($email, $password)) {
            $_SESSION["user"] = $this->UsersModel->getByEmail($email);
            header("location:index.php?page=user-list");
        } else {
            header("location:index.php?page=login");
        }
    }
}