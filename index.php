<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="submit-form.php" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
      
        <label for="desc">Description:</label>
        <textarea rows="4" cols="50" name="desc" maxlength="250" ></textarea>
      
        <input type="submit" value="Submit">
      </form>
</body>
</html>