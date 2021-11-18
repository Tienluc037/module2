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
    <input type="number" name="del"><br>
    <p>Nhập phần tử cần xóa ở mảng: <br/> $arr=[0,1,2,3,4,5,6,7,8,9]; </p>
    <button>xóa</button>
</form>
<?php
$arr=[0,1,2,3,4,5,6,7,8,9];
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $num=$_POST['del'];
    for ($i=0;$i<count($arr);$i++){
        if ($num==$arr[$i]){
            array_splice($arr,$i,1);
            array_push($arr,0);
        }
    }
    var_dump($arr);
}
?>
</body>
</html>
