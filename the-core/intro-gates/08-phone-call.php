<?php 

/*
 * ============================================= *
 *   Exercise: Intro Gates - Phone Call
 * ============================================= *
 *   Exercise link: https://app.codesignal.com/arcade/code-arcade/intro-gates/mZAucMXhNMmT7JWta
 *   My objective: To use Early Return / No Else programming concepts and have a clean 'function solution' code.
*/

/*  
 * creates an array where each corresponding minute costs the respective array position
 * e.g. minute 2 costs array[2] value
*/
function createMinutesArray($min1, $min2_10, $min11): array{
    $minutesArray = [];
    for($i = 0; $i < 11; $i++)
    {
        if($i == 0) $minutesArray[$i] = $min1;
        else if ($i < 10) $minutesArray[$i] = $min2_10;
        else $minutesArray[$i] = $min11;
    }    
    return $minutesArray;
}

// returns the cost for the corresponding minute according to $minutesArray
function currentMinuteCost($currentMinute, $minutesArray): int{
    if ($currentMinute > 9) 
        return $minutesArray[10];
    return $minutesArray[$currentMinute];
}

// main function
function solution($min1, $min2_10, $min11, $s) {
    $minutesArray = createMinutesArray($min1, $min2_10, $min11);    
    $minutesCount = 0;
    while ($s >= 0) {
        $s -= currentMinuteCost($minutesCount, $minutesArray);
        $minutesCount++;
    }
    return $minutesCount - 1;
}
