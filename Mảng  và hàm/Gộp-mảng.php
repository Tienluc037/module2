<?php
$arr1=[1,5,-7];
$arr2=[1,9,6,4];
$arr=[];
for ($i=0;$i<count($arr1);$i++){
    array_push($arr,$arr1[$i]);
}
for ($i=0;$i<count($arr2);$i++){
    array_push($arr,$arr2[$i]);
}
print_r($arr);
