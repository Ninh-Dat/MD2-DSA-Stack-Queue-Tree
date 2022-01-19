<?php
include_once "Stack.php";

$stack =new Stack(5);
$stack->push(1);
$stack->push(3);
$stack->push(5);
$stack->push(7);
$stack->push(9);
//$stack->push(9);
echo "<pre>";
 print_r( $stack);
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();

$stack->push(11);
$stack->push(13);
echo "<pre>";
print_r( $stack);

//echo $stack->isEmpty();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();

//echo $stack->isEmpty();
echo $stack->pop();
//$stack->pop();
//$stack->pop();
//echo "<pre>";
//print_r($stack);
//$stack->top();