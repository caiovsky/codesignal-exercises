<?php

/**
 * Exercise: Interview Practice - Arrays - firstDuplicate
 * ===============================================
 *  Exercise link: https://app.codesignal.com/interview-practice/question/pMvymcahZ8dY4g75q
 *  My objective: Generate understandable code and solve the exercise.
 *  Additional Comments: My initial solution was simpler and involved mostly array_keys(),
 * however, I had some memory issues in that case, around tests 21~. I decided then to optimize 
 * the process by feeding $aux 
 *  PHP Version: 8.0.27
 * ===============================================
 */

/**
 * Codesignal's main answer function.
 * @param array $a
 * @return int
 */
function solution(array $a): int {
    // used SplFixedArray since its more optimized than array, but array can be used instead
    $array = new SplFixedArray(count($a));
    $array = $a;

    // $aux and $pos are used in conjunction to generate the array [$aux] which $answer and $minIndex will be iterated
    $aux = [];
    $pos = [];

    // $answer is the function's return value, $minIndex starts at infinity (INF constant)
    $answer = -1;
    $minIndex = INF;

    // feeds $aux with values from $array
    for($i = 0; $i < count($array); $i++) {
        // if $array[$i] key doesn't exist in $aux, $aux receives new key $array[$i]
        if(!array_key_exists($array[$i], $aux)) {
            $aux[$array[$i]][0] = $i;
            $pos[$array[$i]] = 0;
        }
        else {
            $aux[$array[$i]][$pos[$array[$i]]] = $i;
        }
        $pos[$array[$i]] += 1;
    }

    // iterates through $aux and checks for minimal index
    for($i = 1; $i < count($array)+1; $i++) {
        if(isset($aux[$i][1]) && $aux[$i][1] < $minIndex) {
            $minIndex = $aux[$i][1];
            $answer = $i;
        }
    }

    return $answer;
}