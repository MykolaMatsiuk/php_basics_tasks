<?php
$age = "33das";
if (gettype($age) == "integer" && $age >= 18 && $age <= 59) {
  echo "вам еще работать и работать";
} elseif (gettype($age) == "integer" && ($age > 0 || $age === 0) && $age <= 17) {
  echo "вам еще рано работать";
} elseif (gettype($age) == "integer" && $age > 59) {
  echo "вам пора на пенсию";
} else {
  echo "неизвестный возраст";
}

/*$age = "dfgsdgf";
if ($age >= 18 && $age <= 59) {
  echo "вам еще работать и работать";
} elseif ($age > 59) {
  echo "вам пора на пенсию";
} elseif ($age < 0 || !(is_numeric($age))) {
  echo "неизвестный возраст";
} elseif ($age >= 0 && $age <= 17) {
  echo "вам еще рано работать";
}*/
