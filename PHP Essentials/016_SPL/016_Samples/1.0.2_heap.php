<?php

// изучаем возможности SPL: ч.1 структуры данных
// SPL Heap


$heap = new SplMinHeap();
$heap->insert(123);
$heap->insert(44);
$heap->insert(54);
$heap->insert(711);
$heap->insert(29);


dump(
    [
        $heap->extract(),
        $heap->extract(),
        $heap->extract(),
    ]
);


