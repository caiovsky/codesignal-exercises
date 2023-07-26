<?php

/*
 * ***********************************************
 * ===============================================
 *   Exercise: Edge of the Ocean - almostIncreasingSequence
 * ===============================================
 *   Exercise link: https://app.codesignal.com/arcade/intro/level-2/2mxbGwLzvkTCKAJMG
 *   My objective: Solve the exercise.
 *   PHP Version: 8.0.27
 * ***********************************************
 */

/**
 * Chooses one position in the array and unsets the value.
 * @param array $array array where the unset will take place.
 * @return array $array
 */
function unsetArrayValues(array $array): array {

    // unsets first position if array starts decreasing
    if($array[0] > $array[1]) {
        unset($array[0]);
        return $array;
    }

    // main function loop
    for($i = 1; $i < count($array); $i++) {
        // if it's increasing, just continue
        if($array[$i] > $array[$i-1]) {
            continue;
        }

        // removes in-between value ($i-1) in case [$i-2] to [$i] is increasing
        if($array[$i-2] < $array[$i]) {
            unset($array[$i-1]);
            return $array;
        }

        // removes [$i] because its value is smaller than [$i-1]
        unset($array[$i]);
        return $array;
    }
}

/**
 * Receives array and returns true if array is almostIncreasing or false if not.
 * @param array $sequence provided by the codesignal exercise.
 * @return bool
 */
function solution(array $sequence): bool {
    $sequence = unsetArrayValues($sequence);
    $oldValue = reset($sequence);
    $curValue = 0;

    for($i = 0; $i < count($sequence)-1; $i++) {
        $curValue = next($sequence);
        if ($curValue <= $oldValue) {
            return false;
        }
        $oldValue = $curValue;
    }
    return true;

}
