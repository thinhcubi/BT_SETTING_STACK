<?php

include_once "Stack.php";

$stack = new Stack(5);

$stack->push("I love you");
$stack->push("I can you");
$stack->push("I hate you");
$stack->push("I like you");
$stack->push("YOU fuck");



$stack->pop();
$stack->pop();
$stack->pop();
$stack->push("ad");
$stack->push("ab");
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack);