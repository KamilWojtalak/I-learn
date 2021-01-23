<?php

// Add up the Numbers from a Single Number

// Create a function that takes a number as an argument. Add up all the numbers from 1 to the number you passed to the function. For example, if the input is 4 then your function should return 10 because 1 + 2 + 3 + 4 = 10.

function addUp(int $num): int {
    static $sum; $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    return $sum;
}
  
