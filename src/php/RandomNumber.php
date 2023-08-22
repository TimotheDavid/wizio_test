<?php



function getRandomNumber(int $size, int $min, int $max) {

    $response = [];

    for($i = 0; $i < $size; $i++) {
        $response[] = rand($min, $max);
    }

    return $response;

}