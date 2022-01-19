<?php
include_once "node.php";
class Queue
{
    public $queue;

    public function __construct()
    {
        $this->queue = [];
    }


    public function isEmpty()
    {
        return count($this->queue);
    }

    public function enqueue($value)
    {
     return array_push($this->queue,$value);
    }

    public function dequeue()
    {
        if (!$this->isEmpty()){
            return array_shift($this->queue);
        }
        else{
            echo "hết";
    }
    }


}