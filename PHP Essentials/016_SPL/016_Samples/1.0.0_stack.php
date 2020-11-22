<?php

// изучаем возможности SPL: ч.1 структуры данных
// SPL Stack

$stack = new SplStack();
$stack->push(11);
$stack->push(277);
$stack->push(663);
$stack->push(14);
$stack->push(15);
$stack->push(26);
$stack->push(7);

dump([
    $stack->top(),
    $stack->top(),
    $stack->top(),
    $stack->top(),
    $stack->top(),
    $stack->top(),
]);



