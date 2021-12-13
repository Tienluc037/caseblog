<?php
include_once "app/view/layout/header.php";
?>
<a href="index.php?page=user-list">Back</a>
<table class="table table-striped table table-bordered table table-hover ">
    <tr>
        <th>id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created_at</th>
        <th colspan="3">Action</th>
    </tr>
    <?php if (isset($posts) || !empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['id'] ?></td>
                <td><img style="width: 100px;height: auto" src="<?php echo "upload/".$post["image"] ?>" alt=""></td>
                <td><?php echo $post['title'] ?></td>
                <td><?php echo $post['content'] ?></td>
                <td><?php echo $post['created_at'] ?></td>
                <td><a onclick="return confirm('bạn có muốn xóa?')"
                       href="index.php?page=post-delete&id=<?php echo $post['id'] ?>">Delete</a></td>
                <td><a href="index.php?page=post-update&id=<?php echo $post['id'] ?>">Update</a></td>
                <td><a href="index.php?page=post-detail&id=<?php echo $post['id'] ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4"> không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
