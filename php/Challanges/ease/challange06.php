<?php

// Product of All Integers

// oddProduct([3, 4, 1, 1, 5]) ➞ 15

// oddProduct([5, 5, 8, 2, 4, 32]) ➞ 25

// oddProduct([1, 2, 1, 2, 1, 2, 1, 2]) ➞ 1


function oddProduct($arr) {
	$odd_array = array_map( function($el) {
		if ( !($el % 2 == 0) ) {
			return $el;
		} else {
			return 1;
		}
	} , $arr);
		return array_product( $odd_array );
}