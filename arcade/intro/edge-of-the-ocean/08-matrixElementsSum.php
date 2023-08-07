<?php

function solution (array $matrix): int {
    $ghostedIndexes = [];
    $answer = 0;

    // changes $matrix with 0s
    foreach ($matrix as $row => $column) {
        foreach ($column as $index => $value) {
            if(in_array($index, $ghostedIndexes)) {
                $matrix[$row][$index] = 0;
            }
            if ($value == 0) {
                $ghostedIndexes[] = $index;
            }
        }
    }

    // sums all values into $answer
    foreach ($matrix as $row => $column) {
        foreach ($column as $index => $value) {
            $answer += $value;
        }
    }

    return $answer;
}

echo solution([[1,1,1,0],
          [0,5,0,1],
          [2,1,3,10]]);
