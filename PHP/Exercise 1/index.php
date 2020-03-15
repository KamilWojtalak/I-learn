
<?php


function sumOfDigits(int $num) {
    $sum = 0;
    $rem = 0;
    $counter = 0;
    while($num > 1) {
        ++$counter;
        $rem = $num%10;
        $sum += $rem;
        $num = $num/10;

    }
    

    echo 'Sum of digits ' . $num * (10 ** $counter) . ' is  ' . $sum. '. ';
    return $sum;
}

sumOfDigits(42); // 6
sumOfDigits(666); // 18
sumOfDigits(4273); // 16
sumOfDigits(4353453); 
sumOfDigits('923929393229239'); 




?>
