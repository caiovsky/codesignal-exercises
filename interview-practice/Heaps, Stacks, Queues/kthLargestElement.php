<?php

function solution(array $unsortedArray, int $kthElement) {
    rsort($unsortedArray); // change rsort and implement heapsort, come back to this code later, this is not how the challenge intended to be solved
    var_export($unsortedArray);
    return $unsortedArray[$kthElement-1];
}