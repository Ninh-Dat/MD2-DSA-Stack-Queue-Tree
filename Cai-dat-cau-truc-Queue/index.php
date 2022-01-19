<?php
include_once "node.php";
include_once "Queue.php";

$queue = new Queue();
$queue->enqueue(5);
$queue->enqueue(7);
$queue->enqueue(8);

echo "<pre>";
print_r($queue);