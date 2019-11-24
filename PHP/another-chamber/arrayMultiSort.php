<?php

$array1 = array(1,2,57,85,2435,567,764,752,456,57,3,5,37,3,5,2,4);
$array2 = array(769,67,5746,5,46,56753,7,56,7,83,567,35,6,456);

$array3 = array_multisort($array1,'SORT_NUMERIC', 'SORT_ASC', $array2);

echo $array1[1];


?>