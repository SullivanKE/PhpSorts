<?php

function heapSort(& $array) {
    $length = count($array);

    for ($i = $length / 2; $i >= 0; $i--) {
        heapify($array, $length-1, $i);
    }

    for ($i = $length - 1; $i >= 0; $i--) {
        $temp = $array[$i];
        $array[$i] = $array[0];
        $array[0] = $temp;

        heapify($array, $i-1, 0);
    }
}

function heapify(& $array, $length, $index) {
    $min = $index;
    $left = $index * 2 + 1;
    $right = $index * 2 + 2;

    if ($left <= $length && $array[$min] < $array[$left])
        $min = $left;

    if ($right <= $length && $array[$min] < $array[$right])
        $min = $right;

    if ($min != $index)
    {
        $temp = $array[$min];
        $array[$min] = $array[$index];
        $array[$index] = $temp;
        heapify($array, $length, $min);
    }
}