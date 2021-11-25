<?php
function decimaToBinary ( $number) {
    $stack = new SplStack();
    $quotient = $number;
    while ( $quotient !=0) {
        $remainder = $quotient%2;
        $stack->push($remainder);
        $quotient = (int) ($quotient/2);
    }
    $binary = "";
    $stack->rewind();
    while ( $stack->valid()) {
       $binary .= $stack->current();
       $stack->next();
    }
    echo $binary;
}
decimaToBinary(13);