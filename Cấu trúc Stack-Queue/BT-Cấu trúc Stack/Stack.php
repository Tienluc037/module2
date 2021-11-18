<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 5)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
// thêm vào stack
    public function push($item)
    {
        if (!$this->isFull())
            array_push($this->stack, $item);
        else
            echo "Full";
    }
    //xóa pt cuối
    public function pop() {
        if (!$this->isEmpty())
        array_pop($this->stack);
        else
            echo "rỗng";
    }
    //lấy pt trên cùng
    public function peek(){
          return end( $this->stack);
//        $last = count($this->stack) -1;
//        return $this->stack[$last];
     }
    //check rỗng
    public function isEmpty() {
//        $check = count($this->stack) == 0;
//        return $check;
        return count($this->stack) == 0;
    }
    // check full
    public function isFull() {
        return count($this->stack) >= $this->limit;
    }
}