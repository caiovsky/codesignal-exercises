<?php 

/*
 * *********************************************** 
 * =============================================== 
 *   Exercise: Edge of the Ocean - shapeArea
 * =============================================== 
 *   Exercise link: https://app.codesignal.com/arcade/intro/level-2/yuGuHvcCaFCKk56rJ
 *   My objective: Solve the exercise.
 *   PHP Version: 8.0.27
 * *********************************************** 
 */
 
// performance-wise a fully arithmetic return/calculation would be a better approach, but logically speaking the solution below is how I came to the result
function solution($n) {
    $ret = 1;
    for($i = 1; $i < $n; $i++){
        $ret += $i*4;
    }
    return $ret; 
}

