<?php
class LinkList {
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct() {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function insertFirst($data) {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL)
            $this->lastNode = $link;
    }
}
