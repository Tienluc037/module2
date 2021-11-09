<?php
$arr = [
    [2, 4, 3, 9],
    [24, 1, 10, 8],
    [2, 99, -7],
];
$max=$arr[0][0];
$a=0;
$b=0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($arr[$i][$j]>$max){
            $max=$arr[$i][$j];
            $a=$i;
            $b=$j;
        }
    }
}
echo 'phần tử thứ '.($b+1).' của mảng thứ '.($a+1).' là phần tử lớn nhất, có giá trị là: '.$max;