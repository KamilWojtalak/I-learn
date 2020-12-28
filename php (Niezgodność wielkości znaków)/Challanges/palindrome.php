<?php

function palindrome($str){
    if (strrev(strtolower(trim($str))) == trim(strtolower($str))) {
        return $str . ' to palindrom. ';
    } else {
        return $str . ' nie jest palindromem. ';
    }
}

echo palindrome('kAjak');
echo palindrome('siema');

?>