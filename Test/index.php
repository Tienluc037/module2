<?php
include_once "data.php";
include_once "people.php";
$people = loadData();
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
<style>
    table tr th{
        padding: 20px;
        width: 100px;
        border: 1px solid black;
        background-color: #d39cdc;
    }
    table tr td{
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }
    a {
        color:red
    }
</style>
<body>
    <a href="create.php">ADD</a> <br>
    <a href="Search.php">SEARCH</a> <br>
    <a href="sort.php">SORT</a>
    <table>
        <tr>
            <th>name</th>
            <th>age</th>
            <th>Action</th>
        </tr>

        <?php if (isset ($people)) {
         foreach($people as $key => $value ): ?>
        <tr>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["age"] ?></td>
            <td><a href="delete.php?id=<?php echo $key?>">Delete</a></td>
        </tr>
        <?php endforeach;
        }?>
    </table>
</body>
</html>