<?php
include_once "data.php";
$index = $_REQUEST["id"];
deleteArr($index);
header("location:findMin.php");
