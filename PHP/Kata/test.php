<?php

$sentence = 'Siema jakieś losowe zdanie';

$exploded = explode(' ', $sentence);

$newString = substr($sentence, strlen($exploded[0]) + 1, strlen($exploded[1]));

echo $newString;

?>