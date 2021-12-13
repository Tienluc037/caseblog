
<form method="post">
    <input type="text" name="name" placeholder="Nhập tên" value="<?php echo $user['name'] ?>">
    <input type="email" name="email" placeholder="Nhập email" value="<?php echo $user['email'] ?>">
    <input type="password" name="password" placeholder="Nhập password" value="<?php echo $user['password'] ?>">
    <input type="date" name="birthday" placeholder="date" value="<?php echo $user['birthday'] ?>">
    <input type="text" name="country" placeholder="Nhập địa chỉ" value="<?php echo $user['country'] ?>">
    <button type="submit">Update</button>
    <a href="index.php?page=user-list">
        <button type="button">Back</button>
    </a>
</form>