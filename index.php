<!DOCTYPE html>
<html>
<head>
    <title>Upload File PHP</title>
</head>
<body>
    <h1>Tải lên tập tin hình ảnh</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br> <br>
        <input type="submit" name="submit">
    </form>

    <div>
        <h1>Hình ảnh tải lên</h1>
    </div>
</body>
</html>