<?php
$arr = [7,6,2,68,9,1,2,3];

function bubbleSort($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j <count($arr)-1-$i; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] =  $tmp;
            }
        }
    }
    return $arr;
}echo "<pre>";
print_r(bubbleSort($arr));
