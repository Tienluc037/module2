<?php
include_once "Stack.php";

$stack = new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);

//$stack->pop(); // xóa 4
$stack->peek();
echo "<pre>";
print_r($stack);
echo $stack->peek();