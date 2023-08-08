<?php

/**
 *   Exercise: Edge of the Ocean - matrixElementsSum
 * ===============================================
 *   Exercise link: https://app.codesignal.com/arcade/intro/level-2/xskq4ZxLyqQMCLshr
 *   My objective: Solve the exercise and generate readable code.
 *   PHP Version: 8.0.27
 * ***********************************************
 */

/** Return the total sum of all rooms suitable for the CodeBots.
 * @param array $matrix
 * @return int
 */
function solution(array $matrix): int {
    $ghostedIndexes = [];
    $totalSum = 0;

    // Apply 0s' changes and track ghosted indexes
    foreach ($matrix as $row => $column) {
        foreach ($column as $index => $value) {
            if (in_array($index, $ghostedIndexes) || $value === 0) {
                $matrix[$row][$index] = 0;
                $ghostedIndexes[] = $index;
            }
        }
    }

    // Calculate the total sum
    foreach ($matrix as $row) {
        $totalSum += array_sum($row);
    }

    return $totalSum;
}
