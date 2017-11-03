<?php
// Задание 1 -
$a = 0;
while ($a <= 100) {
if ($a % 3 != 0) {
  $a++;
  continue;
}
echo $a." ";
$a++;
  }
echo "<br>";
// Задание 2 -  вывод чисел в цикле do .. while
$x = 0;
do {
  if ($x == 0) {
    echo "$x - это ноль<br>";
    $x++;
  }
  elseif ($x % 2 != 0) {
    echo "$x - это нечетное число<br>";
    $x++;
  }
  else {
    echo "$x - это четное число<br>";
  $x++;
}
} while ($x <= 10);
echo "<br>";

// задание 3 - массивы
$cities = array(
  'Московская область' => array('Клин', 'Балашиха', 'Люберцы', 'Мытищи', 'Красногорск'),
  'Ленинградская область' => array('Сестрорецк', 'Выборг', 'Кронштадт'),
  'Рязанская область' => array('Рязань', 'Шацк', 'Новомичуринск', 'Кораблино'),
  'Краснодарский край' => array('Краснодар', 'Усть-Лабинск', 'Сочи', 'Новоросийск')
);
foreach ($cities as $region => $cityList) {
  echo $region.":<br>";
  foreach($cityList as $n => $cityname) {
    echo $cityname;
    if ($n < (count($cityList) - 1)) {
      echo ", ";
    }
  }
  echo "<br>";
}
echo "<br>";

//задание 4 - Translit

function translit($str) {
  $letters = array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
    'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '',
    'ы' => 'y','ь' => '\'','э' => 'e' ,'ю' => 'yu','я' => 'ya');
  $str = mb_strtolower($str);
  return strtr($str, $letters);
}
$str = "Что-то тут не так";
echo $str."=><br>";
$trans = translit ($str);
echo $trans;
echo "<br>";

// задание 5 - замена пробелов
function undrl ($str) {
  $underline = strtr($str, ' ', '_');
  return $underline;
}
echo undrl($str);
echo "<br>";

// задание 7 - пустой цикл
for ($i = 0; $i < 10; print $i++){
}
echo "<br>";

// задание 8 - общая функция преобразования

function translit2($str) {
  $letters = array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
    'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '',
    'ы' => 'y','ь' => '\'','э' => 'e' ,'ю' => 'yu','я' => 'ya');
  $str = mb_strtolower($str);
  $transl = strtr($str, $letters);
  $underline = strtr($transl, ' ', '_');
  return $underline;
}
echo translit2 ("Два в одном");
?>
