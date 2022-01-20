<?php
include_once "students.php";
$dt = new Students();
$connect = $dt->connect();
$student = $dt-> show();
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
<table border="1px">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>phone</th>
    </tr>
    <?php foreach ($student as $student):?>
    <tr>

    </tr>
</table>

</body>
</html>