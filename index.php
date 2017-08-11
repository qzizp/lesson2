<?php 

  $x = $_GET['x'];

  echo "Число ".$x;
  echo PHP_EOL;

  $first = 1;
  $second = 1;

  while (true) {
    if ($first > $x) {
      echo "Задуманное число НЕ входит в числовой ряд";
      break;
    } elseif ($first == $x) {
      echo "Задуманное число входит в числовой ряд";
      break;
    } else {
      $third = $first;
      $first = $first + $second;
      $second = $third;
    }
  }

 ?>