<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=U, initial-scale=1.0">
    <title>Upload Image File</title>
</head>
<body>

    <form method="POST" action="target.php" enctype="multipart/form-data">
        <label>Brows Image File</label>
        <input type="file" name="IMGFILE" accept=".jpg,*.png">
        <button type="submit" name="KIRIMFILE">Upload Image File</button>
    </form>
    
</body>
</html>