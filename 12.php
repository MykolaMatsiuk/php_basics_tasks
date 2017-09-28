<?php
$day = rand(-10,10);
echo $day;
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
