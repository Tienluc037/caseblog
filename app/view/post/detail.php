<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Chi tiết bài viết</h3>

<div class="panel-body">
    <div id="morris-chart-area">
        <div class="col-md-3">
            <img width="250px" height="200px"
                 src="<?php echo "uploads/" . ($post['image'] !== null ? $post['image'] : "null.png") ?>">
        </div>
        <div class="col-md-9">
            <h3><?php echo $post['title'] ?></h3>
            <p style="font-style: italic"><?php echo $post['created_at'] ?></p>
            <fieldset>
                <legend>Content</legend>
                <p><?php echo $post['content'] ?></p>
            </fieldset>
            <a href="index.php?page=post-list">Back</a>
        </div>
