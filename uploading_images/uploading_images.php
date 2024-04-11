<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uploads.php" method = "POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file" accept="image/jpeg, image/jpg, image/png" >
        <input type="file" name="file2" id="file2" accept="image/jpeg, image/jpg, image/png" >
        <input type="submit" value="submit">
    </form>
</body>
</html>