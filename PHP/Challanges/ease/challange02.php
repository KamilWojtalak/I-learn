<?php

// Return the Factorial

// Create a function that takes an integer and returns the factorial of that integer. That is, the integer multiplied by all positive lower integers.

function factorial($int) {
	if( $int == 0) {
		echo "Finished \n";
		return 1;
	} else {
			echo $int . "\n";
		echo "$int * factorial($int - 1)";
		return $int * factorial($int - 1);
	}
}