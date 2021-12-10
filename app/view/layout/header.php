<p>User:
    <?php
    if (isset($_SESSION["user"])) {
        $user = $_SESSION["user"];
        echo $user['name'];
    }
    ?>
</p>
<a href="#">Logout</a>
<hr>
