<?php
/**
 * ***********************************************
 * ===============================================
 *   Exercise: At the Crossroads - Arithmetic Expression
 * ===============================================
 *   Exercise link: https://app.codesignal.com/arcade/code-arcade/at-the-crossroads/QrCSNQWhnQoaK9KgK
 *   My objective: Generate understandable code and solve the exercise.
 *   PHP Version: 8.0.27
 * ***********************************************
 */

/**
 * Codesignal's main answer function.
 * @param int $a
 * @param int $b
 * @param int $c
 * @return bool
 */
function solution(int $a, int $b, int $c): bool {
    // creates array with the four operations
    $operations = [$a+$b, $a-$b, $a*$b, $a/$b];

    // checks if $c is a result of one of the operations
    return in_array($c, $operations);
}
