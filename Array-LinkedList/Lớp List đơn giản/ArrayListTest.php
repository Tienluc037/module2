<?php
include_once "ArrayList.php";

$arrayList = new ArrayList();
$arrayList->add(1);
$arrayList->add(5);
$arrayList->add(6);
$arrayList->add(7);
$arrayList->add(8);
echo $arrayList->get(4)."<br>";
$arrayList->remove(5);