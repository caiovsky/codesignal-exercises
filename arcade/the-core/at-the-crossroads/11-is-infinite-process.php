<?php
/**
 * ***********************************************
 * ===============================================
 *   Exercise: At the Crossroads - Is Infinite Process?
 * ===============================================
 *   Exercise link: https://app.codesignal.com/arcade/code-arcade/at-the-crossroads/aFF9HDm2Rsti9j5kc
 *   My objective: Generate understandable code and solve the exercise.
 *   PHP Version: 8.0.27
 * ***********************************************
 */

/**
 * Codesignal's main answer function.
 * @param int $a
 * @param int $b
 * @return bool
 *
 */
function solution(int $a, int $b): bool {
    // true if the values' types match (both are odd or both are even)
    $match = ($a % 2) === ($b % 2);

    // if $b >= $a and they match in type, then loop isn't infinite
    if ($match === true && $b >= $a) {
        return false;
    }

    return true; // true == it generates an infinite loop
}

