<table class="table table-striped table table-bordered table table-hover ">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created_at</th>
        <th colspan="2">Action</th>
    </tr>
    <?php if (isset($posts) || !empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['id'] ?></td>
                <td><?php echo $post['title'] ?></td>
                <td><?php echo $post['content'] ?></td>
                <td><?php echo $post['created_at'] ?></td>
                <td><a onclick="return confirm('bạn có muốn xóa?')"
                       href="index.php?page=post-delete&id=<?php echo $post['id'] ?>">Delete</a></td>
                <td><a href="index.php?page=post-update&id=<?php echo $post['id'] ?>">Update</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4"> không có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
