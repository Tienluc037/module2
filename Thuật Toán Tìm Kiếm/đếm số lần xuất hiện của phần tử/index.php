<?php
$num = [1,2,3,4,5,6,3,8,9,3];
function Dem($value,$number) {
    $count = 0;
    for($i = 0; $i < count($value); $i++) {
        if($value[$i] === $number) {
            $count += 1;
        }
    }
    return $count;
}
$numberSearch = 3;
echo Dem($num,$numberSearch);
