<?php
  $a = 9;
  $b = 3;
  $c = 7;

  if (($a > $b) and ($a > $c)){
    echo "a MAX";
  }
  elseif (($b > $c) and ($b > $a)){
    echo "b MAX";
  }
  elseif (($c > $a) and ($c > $b)){
    echo "c MAX";
    }
  else{
    echo ('Введите нормальные числа');
  }
 ?>