<?php
    // Star Pattern
    for($i=1;$i<=3;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }

    // Number Pattern
    for($i=3;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){
            echo $j." ";
        }
        echo "<br>";
    } 
?>