<?php
    $a = 1;
    $array = array(1,2,3,-8,5,6);
    foreach($array as $index => $value){
        if ($value > 0){
            $a = $a*1;
        }
        else {
            $a = $a*0;
        }
    };
    
    if ($a == 0){
        echo "Да";
    }
    else{
        echo "Нет";
    }
?>