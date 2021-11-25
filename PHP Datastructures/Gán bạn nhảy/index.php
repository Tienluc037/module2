<?php
include_once "Dancer.php";

$dancerBoy = new SplQueue();
$dancerGirl = new SplQueue();

$dancerBoy->enqueue(new Dancer(Nam,$dancerBoy));
$dancerBoy->enqueue(new Dancer(cong,$dancerBoy));
$dancerBoy->enqueue(new Dancer(tung,$dancerBoy));
$dancerBoy->enqueue(new Dancer(hung,$dancerBoy));

$dancerGirl->enqueue(new Dancer(thuy,dancerGirl));
$dancerGirl->enqueue(new Dancer(Dung,dancerGirl));
$dancerGirl->enqueue(new Dancer(linh,dancerGirl));

$couple = [];
$boy_wait = [];
$girl_wait = [];

while (!$dancerBoy->isEmpty() || !$dancerGirl->isEmpty()) {
    if ($dancerGirl->isEmpty()) {
        $boy_wait[] = $dancerBoy->dequeue()->name;
    } else if ($dancerBoy->isEmpty()) {
        $girl_wait[] = $dancerGirl->dequeue()->name;
    } else {
        $couple[] = $dancerGirl->dequeue()->name . " + " . $dancerBoy->dequeue()->name;
    }
}

echo "<pre>";
echo "Cặp đôi:" . "<br>";
print_r($couple);
echo "Hàng đợi Nam:" . "<br>";
print_r($boy_wait);
echo "Hàng đợi Nữ:" . "<br>";
print_r($girl_wait);

