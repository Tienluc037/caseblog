
<form method="post" enctype="multipart/form-data">
    <table  class="table table-hover">
        <tr>
            <td>
                <input class="form-control" type="text" name="name" placeholder="Nhập tên" value="<?php echo $user['name'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="file" name="fileUpToLoad">
                <img style="width: 100px" src="<?php echo "upload/" . $user['image'] ?>" alt="">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="email" name="email" placeholder="Nhập email" value="<?php echo $user['email'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="password" name="password" placeholder="Nhập password" value="<?php echo $user['password'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="date" name="birthday" placeholder="date" value="<?php echo $user['birthday'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input class="form-control" type="text" name="country" placeholder="Nhập địa chỉ" value="<?php echo $user['country'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-info" type="submit">Update</button>
                <a href="index.php?page=user-list">
                    <button type="button" class="btn btn-primary">Back</button>
                </a>
            </td>
        </tr>
    </table>
<!--    <input class="form-control" type="text" name="name" placeholder="Nhập tên" value="--><?php //echo $user['name'] ?><!--">-->
<!--    <input class="form-control" type="file" name="fileUpToLoad">-->
<!--    <img style="width: 100px" src="--><?php //echo "upload/" . $user->image ?><!--" alt="">-->
<!--    <input class="form-control" type="email" name="email" placeholder="Nhập email" value="--><?php //echo $user['email'] ?><!--">-->
<!--    <input class="form-control" type="password" name="password" placeholder="Nhập password" value="--><?php //echo $user['password'] ?><!--">-->
<!--    <input class="form-control" type="date" name="birthday" placeholder="date" value="--><?php //echo $user['birthday'] ?><!--">-->
<!--    <input class="form-control" type="text" name="country" placeholder="Nhập địa chỉ" value="--><?php //echo $user['country'] ?><!--">-->
<!--    <button class="btn btn-info" type="submit">Update</button>-->
<!--    <a href="index.php?page=user-list">-->
<!--        <button type="button" class="btn btn-primary">Back</button>-->
<!--    </a>-->

</form>
