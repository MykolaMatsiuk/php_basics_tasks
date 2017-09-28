<?php
$day = rand(1,7);
switch ($day) {
  case ($day >= 1 && $day <= 5):
    echo "это рабочий день";
    break;
}
