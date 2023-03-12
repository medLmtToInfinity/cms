<?php
if(isset($_POST["create_post"])) {
    $post_title = mysqli_real_escape_string($_POST["post_title"]);
    $post_category_id = mysqli_real_escape_string($_POST["post_category_id"]);
    $post_author = mysqli_real_escape_string($_POST["post_author"]);
    $post_status = mysqli_real_escape_string($_POST["post_status"]);
    $post_image_name = $_FILE["post_image"]["name"];
    $post_image_tmp = $_FILE["post_image"]["tmp_name"];
    $post_content = mysqli_real_escape_string($_POST["post_content"]);
    $post_date = date("d-m-y");
    $post_comment_count = 10;
    move_uploaded_file($post_image_tmp, "../images/$post_image_name");
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="post_title" id="title">
    </div>
    <div class="form-group">
        <label for="post_category">Post Category</label>
        <input type="text" class="form-control" name="post_category_id" id="post_category">
    </div>
    <div class="form-group">
        <label for="author">Post Author</label>
        <input type="text" class="form-control" name="post_author" id="author">
    </div>
    <div class="form-group">
        <label for="status">Post Status</label>
        <input type="text" class="form-control" name="post_status" id="status">
    </div>
    <div class="form-group">
        <label for="image">Post Image</label>
        <input type="file" class="form-control" name="post_image" id="image">
    </div>
    <div class="form-group">
        <label for="content">Post Content</label>
        <textarea type="text" class="form-control" name="post_content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
    </div>
</form>