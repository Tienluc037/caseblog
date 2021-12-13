<form method="post" enctype="multipart/form-data">
    <table class="table table-hover">
        <tr>
            <td>
                <input class="form-control" type="text" name="title" placeholder="Nhập tiêu đề"
                       value="<?php echo $post['title'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="text" name="content" placeholder="content"
                       value="<?php echo $post['content'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="date" name="created_at" placeholder="Created_at"
                       value="<?php echo $post['created_at'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="text" name="user_id" value="<?php echo $_SESSION['user']["id"] ?>"
                       readonly>
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="file" name="fileUpToLoad">
                <img style="width: 100px" src="<?php echo "upload/" . $post['image'] ?>" alt="">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button>
                <a href="index.php?page=user-list">
                    <button type="button">Back</button>
                </a>

            </td>
        </tr>
    </table>
</form>