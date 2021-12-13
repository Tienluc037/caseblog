<form method="post" enctype="multipart/form-data">

    <table  class="table table-hover">
        <tr>
            <td>
                <input class="form-control" type="text" name="name" placeholder="Nhập tên">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="email" name="email" placeholder="Nhập email">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="password" name="password" placeholder="Nhập password">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="date" name="birthday" placeholder="date">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="text" name="country" placeholder="Nhập địa chỉ">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control"  type="file" name="fileUpToLoad">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">ADD NEW USER</button>
                <a href="index.php?page=user-list">
                    <button type="button">Back</button>
                </a>
            </td>
        </tr>
    </table>
</form>
