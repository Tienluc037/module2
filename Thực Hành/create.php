<?php
include_once "data.php";
include_once "people.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="Age">
    <button type="submit">ADD</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    addNewPeople($_REQUEST);
    header("location:index.php");
}