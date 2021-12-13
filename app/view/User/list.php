<?php
include_once "app/view/layout/header.php";
?>

<h2 align="center">THÔNG TIN NGƯỜI DÙNG</h2>

<table class="table table-striped table table-bordered table table-hover ">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Country</th>
        <th colspan="2">Action</th>
    </tr>
    <?php if (isset($users) || !empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user ['id'] ?></td>
                <td><img style="width: 100px;height: auto" src="<?php echo "upload/".$user["image"] ?>" alt=""></td>
                <td><?php echo $user ['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user ['birthday'] ?></td>
                <td><?php echo $user ['country'] ?></td>
                <td><a onclick="return confirm('bạn có muốn xóa?')"
                       href="index.php?page=user-delete&id=<?php echo $user ['id'] ?>">Delete</a></td>
                <td><a href="index.php?page=user-update&id=<?php echo $user ['id'] ?>">Update</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5"> Không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>

