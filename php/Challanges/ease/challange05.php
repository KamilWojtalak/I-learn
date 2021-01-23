<?php

// Say Hello to Guests


// greetPeople(["Joe"]) ➞ "Hello Joe"

// greetPeople(["Angela", "Joe"]) ➞ "Hello Angela, Hello Joe"

// greetPeople(["Frank", "Angela", "Joe"]) ➞ "Hello Frank, Hello Angela, Hello Joe"

function greetPeople($names) {
	$greeting = array_map(  function($el) {
		echo "Hello $el \n";
		return "Hello $el";
	}, $names);
	return implode( ', ', $greeting);
}