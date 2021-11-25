<?php
include_once "Queue.php";

$queue = new Queue(5);
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
$queue->enQueue(5);

$queue->deQueue(); // xóa 5
$queue->peek();
echo "<pre>";
print_r($queue);
echo $queue->peek();