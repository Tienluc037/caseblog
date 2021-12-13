<?php
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}else{
    header("location:index.php?page=login");
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark"">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <?php echo $user['name'];?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                <a class="dropdown-item" href="#">Setting</a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
    <form action="" method="get" class="navbar navbar-dark bg-dark">
        <table>
            <tr>
                <th><input type="text" name="search" placeholder="Nhập tên"></th>
                <th>
                    <button type="submit">Search</button>
                </th>
            </tr>
        </table>
    </form>
</div>

</nav>


<hr>

<div class=btn-group-vertical" role="group" aria-label="Button group with nested dropdown">

    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <a href="index.php?page=user-list">Users</a>
            <a href="index.php?page=post-list">Posts</a>
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="index.php?page=user-create">ADD NEW USER</a>
            <a class="dropdown-item" href="index.php?page=post-list">Posts</a>
            <a class="dropdown-item" href="index.php?page=post-add">ADD NEW P0ST</a>
        </div>
    </div>
</div>

