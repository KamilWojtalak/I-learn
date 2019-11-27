<?php

$sentence = 'Siema jakieś losowe zdanie';

$siema = explode(' ', $sentence);

echo $siema[0][0];

$recoveredSentence = implode(' ', $siema);

echo $recoveredSentence;

?>