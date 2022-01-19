<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)//thêm phần tử vào stack
    {
        if (count($this->stack) < $this->limit)
        {
            //hàm array_unshift thêm phần tử vào đầu mảng
            array_unshift($this->stack,$item);
        }
        else{
            echo "Đầy rồi không thêm vào được";
        }
    }

    public function pop()//lấy ra phần tử từ stack
    {
        if ($this->isEmpty()){
            echo "Trong mảng không có gì";
        }
        else{
            //loại bỏ phần tử đầu tiên của mảng
            return array_shift($this->stack);
        }
    }

    public function top()//hiển thị phần tử trên cùng của stack
    {
        return current($this->stack);
    }

    public function isEmpty()//kiểm tra xem stack có rỗng hay ko
    {
        return empty($this->stack);
    }
}