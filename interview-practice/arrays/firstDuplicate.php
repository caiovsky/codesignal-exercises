<?php

/**
 * Exercise: Interview Practice - Arrays - firstDuplicate
 * ===============================================
 *  Exercise link: https://app.codesignal.com/interview-practice/question/pMvymcahZ8dY4g75q
 *  My objective: Generate clean and understandable code to solve the exercise.
 *  PHP Version: 8.0.27
 * ===============================================
 */

/**
 * Find the first duplicate in the array and return it. If there are no duplicates, return -1.
 * @param array $arr The input array of integers.
 * @return int The first duplicate element, or -1 if no duplicates are found.
 */
function solution(array $arr): int {
    $elementPositions = [];
    $answer = -1;
    $minIndex = INF;

    // Iterate through the input array to find duplicates and track their positions
    foreach ($arr as $index => $value) {
        $elementPositions[$value][] = $index;
    }

    // Find the first duplicate and update the answer and minimum index accordingly
    foreach ($elementPositions as $value => $positions) {
        if (count($positions) > 1 && $positions[1] < $minIndex) {
            $minIndex = $positions[1];
            $answer = $value;
        }
    }

    return $answer;
}
