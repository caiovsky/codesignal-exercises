<?php

function solution($matrix) {
    $ghostedIndexes = [];
    $zeroedPositions = [];
    $answer = 0;

    // finds all necessary 0s and puts into $zeroedPositions array
    foreach($matrix as $row => $column) {
        foreach($column as $index => $value) {
            if (in_array($index, $ghostedIndexes)) {
                $zeroedPositions[$row][$index] = 0;
            }
            if ($value == 0) {
                $ghostedIndexes[] = $index;
            }
        }
    }
    //var_export($zeroedPositions);

    // uses $zeroedPositions to transform its corresponding necessary values to 0
    foreach($zeroedPositions as $row => $column) {
        foreach($column as $index => $value) {
            $matrix[$row][$index] = '0';
        }
    }

    // sums into $answer
    foreach($matrix as $row => $column) {
        foreach($column as $index => $value) {
            $answer += $value;
        }
    }

    return $answer;
}


solution([[1,1,1,0],
          [0,5,0,1],
          [2,1,3,10]]);
