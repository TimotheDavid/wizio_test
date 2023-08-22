<?php


function getMinNumber(array $number): int {

    $first = $number[0];
    foreach ($number as $item) {

        if ($item < $first) {
                $first = $item;
        }
    }

    return $first;
}