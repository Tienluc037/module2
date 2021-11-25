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

    <h3>Phân loại đầu số</h3>
    <label>
        <textarea name="input" rows="5" cols="20"></textarea>
    </label>
    <br>
    <input type="submit" value="Phân loại">

</form>
</body>
</html>
<?php
include_once "Test.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    $arr = explode(',', $input);
    foreach ($arr as $value) {
        if (checkPhoneNumber($value) == 1) {
            echo $input." is Viettel";
        } elseif (checkPhoneNumber($value) == 2) {
            echo $input." is Vinaphone";
        } elseif (checkPhoneNumber($value) == 3) {
            echo $input." is Mobifone";
        }
    }

}
?>
