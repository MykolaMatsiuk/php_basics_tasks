<?php
$day = rand(1,7);
switch ($day) {
  case ($day >= 1 && $day <= 5):
    echo "это рабочий день";
    break;
  case ($day >= 6 && $day <= 7):
    echo "это выходной день";
    break;
}
