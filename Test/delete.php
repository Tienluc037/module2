<?php
include_once "data.php";
$index = $_REQUEST["id"];
deletePeople($index);
header("location:index.php");
