<form method="post">
    <input type="text" name="title" placeholder="Nhập tiêu đề" value="<?php echo $post['title'] ?>">
    <input type="text" name="content" placeholder="content" value="<?php echo $post['content'] ?>">
    <input type="date" name="created_at" placeholder="Created_at" value="<?php echo $post['created_at'] ?>">
    <button type="submit">Send</button>
    <a href="index.php?page=user-list">
        <button type="button">Black</button>
    </a>
</form>