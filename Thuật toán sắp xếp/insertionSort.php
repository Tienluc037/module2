<?php
$arr = [7,6,2,68,9,1,2,3];
function insertionSort($arr) {
    for ( $i = 0; $i < count($arr); $i++) {
        $value = $arr[$i];
        $j = $i -1;
        while ($j >=0 && $arr[$j] > $value) {
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $value;
    }
    return $arr;
}
echo "<pre>";
print_r(insertionSort($arr));