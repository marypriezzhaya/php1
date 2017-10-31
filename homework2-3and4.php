<?php
// Задание 3 - математические операции

// определяем функции математических операций
function addition($a, $b) { //сложение
  return $a + $b;
}
function substraction($a, $b) { //вычитание
  return $a - $b;
}
function multiplication($a, $b) { //умножение
  return $a * $b;
}
function division($a, $b) { //деление
  if ($b == 0) { // проверяем, что не будет попытки деления на ноль
    return "Делить на ноль запрещено, у нас пропал знак бесконечности, и мы не можем вывести результат!";
  }
  else {
    return $a / $b;
  }
}
// выбор, какую операцию выполнять
function mathOperation($a, $b, $operation) {
  switch ($operation) {
    case 'addition':
      return addition($a, $b);
      break;
    case 'substraction':
      return substraction($a, $b);
      break;
    case 'multiplication':
      return multiplication($a, $b);
      break;
    case 'division':
      return division($a, $b);
      break;

    default:
      return "Нет такой операции $operation!";
      break;
  }
}
//проверка
$result = mathOperation(5, 10, 'addition');
echo $result;
echo "<br>";
$result = mathOperation(5, 10, 'substraction');
echo $result;
echo "<br>";
$result = mathOperation(5, 10, 'multiplication');
echo $result;
echo "<br>";
$result = mathOperation(5, 10, 'division');
echo $result;
echo "<br>";
$result = mathOperation(5, 0, 'division');
echo $result;
echo "<br>";
$result = mathOperation(5, 10, 'mix, don\'t shake');
echo $result;
echo "<br>";


?>
