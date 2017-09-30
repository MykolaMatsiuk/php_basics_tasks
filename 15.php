<?php

function calc($a, $b, $operator) {
  switch ($operator) {
    case "+":
      $result = $a + $b;
      break;
    case "-":
      $result = $a - $b;
      break;
    case "/":
      if ($b == 0) {$result = "error: you can not devide on 0";} 
        else {$result = $a / $b;};
      break;
    case "*":
      $result = $a * $b;
      break;
    case "%":
      if ($b == 0) {$result = "error: you can not devide on 0";}
        else $result = $a % $b;
      break;
  }
  return $result;
}
echo calc(5,0,"%");
