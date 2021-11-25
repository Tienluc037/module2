
<?php
$arr = [7,6,2,68,9,1,2,3];
 function selectionSort ($arr) {
     for ( $i = 0; $i < count($arr)-1; $i++) {
         $min = $i;
         for ($j = $i+1; $j < count($arr); $j++) {
             if ($arr[$min] > $arr[$j]) {
                 $min = $j;
             }
         }
         $tmp = $arr[$min];
         $arr[$min] = $arr[$i];
         $arr[$i] =  $tmp;
     }
     return $arr;
 }
echo "<pre>";
print_r(selectionSort($arr));