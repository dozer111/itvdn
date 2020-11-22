<?php

// изучаем возможности SPL: ч.1 структуры данных
// SPL Queue

$stack = new SplQueue();
$stack->enqueue(11);
$stack->enqueue(277);
$stack->enqueue(663);
$stack->enqueue(14);
$stack->enqueue(15);
$stack->enqueue(26);
$stack->enqueue(7);

dump([
    $stack->dequeue(),
    $stack->dequeue(),
    $stack->dequeue(),
    $stack->dequeue(),
    $stack->dequeue(),
    $stack->dequeue(),
]);



