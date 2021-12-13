<form method="post" enctype="multipart/form-data">
    <table  class="table table-hover">
        <tr>
            <td>
                <input class="form-control"  type="text" name="title" placeholder="Nhập tiêu đề">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control"  type="text" name="content" placeholder="Content">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control"  type="date" name="created_at" placeholder="Created_at">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control"  type="text" name="user_id" value="<?php echo $_SESSION['user']["id"]?>" readonly>
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control"  type="file" name="fileUpToLoad">
            </td>
        </tr>
        <tr>
        <tr>
            <td>
                <button type="submit">ADD NEW POST</button>
                <a href="index.php?page=post-list">
                    <button type="button">Back</button>
                </a>
            </td>
        </tr>


    </table>






</form>
