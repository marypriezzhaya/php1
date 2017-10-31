<?php
// Задание 7 -вывод времени
//$hour = date('G');
//$minute = date('i');
function timeText($hour, $minute) {
  if ($hour == 1 || $hour == 21) {
    $hourText = 'час';
  }
  elseif (($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 24)) {
    $hourText = 'часа';
  }
  else {
    $hourText = 'часов';
  }
  if ($minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51) {
    $minuteText = 'минута';
  }
  elseif (($minute >= 2 && $minute <= 4) || ($minute >= 22 && $minute <= 24) || ($minute >= 32 && $minute <= 34) ||
  ($minute >= 42 && $minute <= 44) || ($minute >= 52 && $minute <= 54)) {
    $minuteText = 'минуты';
  }
  else {
    $minuteText = 'минут';
  }
  echo $hour." ".$hourText." ".$minute." ".$minuteText;
}
timeText(date('G'), date('i'));

?>
