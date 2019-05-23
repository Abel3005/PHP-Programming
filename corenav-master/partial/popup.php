<div id="element_to_pop_up">
    <h3>Login</h3>
    <form method="post" action="function/login.php">
        <input type="text" placeholder="id" name="id">
        <input type="password" placeholder="password" name="pw">
        <input type="submit" value="Login">
    </form>
</div>
<div id="upload_image_pop_up">
    <h2>Upload Image</h2>
    <form id="form1" method="post" enctype="multipart/form-data" action="">
        <input type="file" id="inputp" name="myfile">
        <input type="image" src="#" alt="파일 업로드 사진" style="display: none; margin-bottom: 10px;">
        <input type="text" placeholder="title" name="title">
        <input type="text" placeholder="description" name="description">
        <input type="submin" value="Upload">
    </form>
</div>