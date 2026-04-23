<?php
    $number1=1;
    $number2=2;
    $number3=3;

    if($number1>$number2 && $number1>$number3){
        echo "The Largest Number Between $number1,$number2,$number3: $number1";
    } else if($number2>$number1 && $number2>$number3){
        echo "The Largest Number Between $number1,$number2,$number3: $number2";
    } else{
        echo "The Largest Number Between $number1,$number2 & $number3: $number3";
    }
?>