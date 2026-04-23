<?php
    $array=[1,2,3,4,5,6,7,8,9,10];
    $element=66;
    $flag=0;

    foreach($array as $a){
        if($a==$element){
            $flag=1;
            break;
        }
    }

    if($flag){
        echo "$element is Found";
    } else {
        echo "$element is Not Found";
    }
?>