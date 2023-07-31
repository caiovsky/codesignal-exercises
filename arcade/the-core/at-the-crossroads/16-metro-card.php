<?php

/**
 * ***********************************************
 * ===============================================
 *   Exercise: At the Crossroads - Metro Card
 * ===============================================
 *   Exercise link: https://app.codesignal.com/arcade/code-arcade/at-the-crossroads/J7PQDxpWqhx7HrvBZ
 *   My objective: Generate understandable code and solve the exercise.
 *   PHP Version: 8.0.27
 * ***********************************************
 */

/**
 * Codesignal's main answer function.
 * @param int $lastNumberOfDays
 * @return array
 */
function solution(int $lastNumberOfDays): array {
    /**
     * $monthDaysCount represents each month in number of days,
     * $arr is the array to be returned as the exercise's answer.
     */
    $monthDaysCount = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    $arr = [];

    // feeds the array with the next-month values
    for ($i = 0; $i < count($monthDaysCount)-1; $i++){
        if($lastNumberOfDays == $monthDaysCount[$i]) {
            if(in_array($monthDaysCount[$i+1], $arr) == false) {
                $arr[] = $monthDaysCount[$i+1];
            }
        }
    }

    // sorts the array in ascending order
    sort($arr);

    return $arr;
}
