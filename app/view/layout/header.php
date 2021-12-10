<p>User:
    <?php
    if (isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
        echo $user['name'];
    }
    ?>
</p>
<a href="index.php?page=">Logout</a>
<hr>
