<?php
$day = 2;
echo "$day - ";
if (!($day == 0) && gettype($day) == 'integer') {
  switch ($day) {
    case ($day >= 1 && $day <= 5):
      echo "это рабочий день";
      break;
    case ($day >= 6 && $day <= 7):
      echo "это выходной день";
      break;
    case ($day < 1 || $day > 7):
      echo "неизвестный день";
      break;
  }
} else 
echo "invalid input";
