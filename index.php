<?php
include_once 'Stack.php';

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(5);
$stack->push(8);
$stack->push(9);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();


echo "<pre>";
print_r($stack->getNewStack());
echo "</pre>";

echo "<pre>";
print_r($stack->getStack());
echo "</pre>";