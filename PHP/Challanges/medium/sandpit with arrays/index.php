<?php
namespace siema;

$first = [0,1,2,3,4,5,6,7,8,9];
$second = ['random', 'radom', 'text'];
$second2 = ['random', 'text'];
$third = array(
    'first' => 'first1',
    'second' => 'second2',
    'third' => 'third3',
    'fourth' => 'fourth4',
    'fifth' => 'fifth5',
    'sixth' => 'sixth6',
    'seventh' => 'seventh7',
    'eighth' => 'eighth8',
    'nineth' => 'nineth9',
    'tenth' => 'tenth10',
);

$fourth = array(
    array(
        'name' => 'Kamil',
        'occupation'   => 'pupil'

    ),
    array(
        'name' => 'Patrick',
        'occupation'   => 'mechanic'

    ),
    array(
        'name' => 'John',
        'occupation'   => 'teacher'

    ),
    array(
        'name' => 'Robert',
        'occupation'   => 'firefighter'

    ),
);

$siema0 = array_change_key_case( $third, CASE_LOWER);
$siema0 = array_change_key_case( $third, CASE_UPPER);

// print_r( $siema0 );

$siema1 = array_chunk( $first, 4 );

// print_r( $siema1 );

$siema2 = array_column( $fourth, 'occupation' );

// print_r( $siema2 );

$siema3 = array_combine( $third, $first );

// print_r( $siema3 );

$siema4 = array_count_values( $third );

// print_r( $siema4 );

$siema5 = array_diff_assoc( $second, $second2 );

// print_r( $siema5 );

$siema6 = array_diff_key( $first, $second);

// print_r( $siema6 );

$siema7 = array_diff( $second, $second2 );

// print_r( $siema7 );
static $siema8;
$siema8 = array();
for ( $i = 0; $i < 10; $i++ ) {
    array_push( $siema8, array_fill( 0, 2, $i ) );
}

// print_r( $siema8 );

$siema9 = array_filter( $first, function( $el ) {
    return !($el % 2);
} );

// print_r( $siema9 );


$siema10 = function() use ($first) {
    for ( $i = 0; $i < count( $first ) + 5; $i++ ) {
        if ( array_key_exists( $i, $first ) ) {
            echo "$i key exists in \$first array \n";
        } else {
            echo "$i key doesn't exists in \$first array \n"; 
        }
    }
};

// $siema10();

$siema11 = array_key_first( $third );

// print_r( $siema11 );

$siema12 = array_keys( $third );

// print_r( $siema12 );

$siema13 = array_map( function($el) {
    return ($el * 2 / 5 + 11)  / 2 - 5.3;
}, $first);

// print_r( $siema13 );

$siema14 = array_merge( $second, $second2 );

// print_r( $siema14 );

// $siema15 = array_multisort( $fourth, SORT_ASC, SORT_NATURAL );

// print_r( $fourth );

$siema16 = array_shift( $first );

// print_r( $siema16 );

$siema17 = array_pop( $first );

// print_r( $siema17 );

$siema18 = array_product( $first );

// print_r( $siema18 );

$siema19 = array_push( $first, $siema17 );

// print_r( $first ); 

$siema20 = array_rand( $first, 5 );

// print_r( $siema20 );

$siema21 = array_reduce( $first, function( $carry, $el ) {
    if ( $el == 1) {
        return $carry += $el;
    } else {
        return $carry *= $el;
    }
} ); 

// print_r( $siema21 ); 

$siema22 = array_replace( $first, $second ); 

// print_r( $siema22 );

$siema23 = array_reverse( $first, true );

// print_r( $siema23 );

$siema24 = array_shift( $first );

// print_r( $siema24 );
array_unshift( $first, $siema24 );

$siema25v1 = intdiv(count($first), 2);
$siema25 = array_slice( $first, $siema25v1);

// print_r( $siema25 );

$siema26 = array_splice( $first, $siema25v1, count($first) , $siema25 );

// print_r( $first );

$siema27 = array_sum( $first );

// print_r( $siema27 );

$siema28v1 = array_merge( $second, $second2 );
$siema28 = array_unique( $siema28v1 );

// print_r( $siema28 );

$siema29 = array_values( $fourth );

// print_r( $siema29 );


$siema30v1 = array_walk( $first, function( &$el, $key) {
    if ( $key == 0 ) {
        return;
    }
    $el *= $key;
});
$siema30 = array_walk( $first, function( &$el, $key ) {
    if ( $key == 0 ) {
        return;
    }
    $el /= $key;
} );

// print_r( $first );


$siema31 = function() use ($first) {
    for( $i = 0; $i < count( $first ) * 2; $i++ ) {
        if ( in_array( $i, $first ) ) {
            echo "$i exists as a value in \$first array \n";
        } else {
            echo "$i doesn't exists as a value in \$first array \n";
        }
    }
};

// $siema31();

$siema32 = shuffle( $first );

// print_r( $first ); 

$siema33 = sort( $first, SORT_NUMERIC );

// print_r( $first );

