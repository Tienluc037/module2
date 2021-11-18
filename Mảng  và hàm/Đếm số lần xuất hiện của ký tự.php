<?php
$str = "h,h,f,h,d,gd,h,s,g,s,h,a,e";
$character = "h";
$count = 0;
for ( $i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == $character) {
        $count += 1;
    }
}
echo $str . "<br/>";
echo "số lần " .$character . " xuất hiện là: " .$count ."lần.";