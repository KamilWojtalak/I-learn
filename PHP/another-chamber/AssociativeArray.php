<?php

$siema = ["Kamil" => 17, "Patryk" => 27, "Coś losowego" => 0];

$siema2 = array_change_key_case($siema, CASE_UPPER);

print_r($siema2["Kamil"]);

?>