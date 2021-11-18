<?php
$arr = [
    [2, 6, 8, 3, 9, 5],
    [1, 8, 77, 5],
    [9, 2, 7, 9, 5],
    [1, 2, 8, 17, 9, 5]
];
$sum=0;
$row = 1;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($j==$row){
            $sum+=$arr[$i][$j];
        }
    }
}
echo $sum;

