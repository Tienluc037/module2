<?php

class Queue
{
    public $queue;
    public $limit;

    public function __construct($limit = 5)
    {
        $this->queue = array();
        $this->limit = $limit;
    }

// thêm vào queue

    public function enQueue($item)
    {
        if (!$this->isFull())
            array_push($this->queue, $item);
        else
            echo "Full";
    }

    //xóa pt cuối
    public function deQueue()
    {
        if (!$this->isEmpty())
            array_pop($this->queue);
        else
            echo "rỗng";
    }

    //lấy pt trên cùng
    public function peek()
    {
        return end($this->queue);
//        $last = count($this->queue
//) -1;
//        return $this->queue
//[$last];
    }

    //check rỗng
    public function isEmpty()
    {
//        $check = count($this->queue) == 0;
//        return $check;
        return count($this->queue) == 0;
    }

    // check full
    public function isFull()
    {
        return count($this->queue) >= $this->limit;
    }
}
