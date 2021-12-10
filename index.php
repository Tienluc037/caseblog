<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container">
<?php
session_start();
include_once "app/controllers/UserController.php";
include_once "app/controllers/PostController.php";
include_once "app/controllers/AuthController.php";

$userController = new UserController();
$postController = new PostController();
$authController = new AuthController();

$page = $_GET['page'] ?? null;

switch ($page) {
    case "user-list":
        $userController->showAll();
        break;
    case "user-create":
        $userController->create();
        break;
    case "user-delete":
        $userController->delete();
        break;
    case "user-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $userController->edit();
        } else {
            $userController->update();
        }


        break;
    case "post-list":
        $postController->showAll();
        break;
    case "post-add":
        $postController->add();
        break;
    case "post-delete":
        $postController->delete();
        break;
    case "post-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $postController->edit();
        } else {
            $postController->update();
        }
        break;
    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormLogin();
        } else {
            $authController->login($_REQUEST);
        }
        break;
    default:
        header("location:index.php?page=login");
}
?>
</body>
</html>