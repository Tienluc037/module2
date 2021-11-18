<?php


class ArrayList
{
    public $arrayList;

    public function ArrayLists($arr = "")
    {
        if ($this->arrayList) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($item)
    {
        array_push($this->arrayList, $item);

    }

    public function get($index)
    {
        if ($index < $this->size()) {
            echo "phần tử tại vị trí " . $index . " là: ";
            return $this->arrayList[$index];
        } else {
            echo " Không tồn tại phần tử ở vịt trí " . $index;
        }
    }

    public function remove($index)
    {
        if (array_key_exists($index, $this->arrayList)) {
            echo "xóa phần tử tại vị trí: " . $index;
//            return $this->arrayList[$index];
        } else {
            echo "Không tồn tại phần tử tại vị trí: " . $index;
        }
    }

    public function size()
    {
        return count($this->arrayList);
    }
}