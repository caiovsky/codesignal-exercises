/*
    Exercise: Intro Gates - Late Ride
    Exercise link: https://app.codesignal.com/arcade/code-arcade/intro-gates/aiKck9MwwAKyF8D4L
    My objective: To code a solution thinking about a 'maintainable' system for this execise. Imagining the code would be used for other people.
*/

// converts minutes to hours and minutes format (00:00) and returns an array of 4 positions
function minutesToHoursAndMinutes($minutes){
    $hours = 0;
    while ($minutes > 59){
        $minutes -= 60; 
        $hours++;
    }  
    $timeAsString = '' . $hours . $minutes;
    $timeAsArray = str_split($timeAsString);
    return $timeAsArray;
}

// sums all the individual digits of each position in an array
function arrayIntSum($array){
    $arrayLength = count($array);
    $sum = 0;
    for ($i = 0 ; $i < $arrayLength; $i++){
        $sum += intval($array[$i]);   
    }
    return $sum;
}

function solution($n) {
    $clock = minutesToHoursAndMinutes($n);     
    return arrayIntSum($clock); 
}
