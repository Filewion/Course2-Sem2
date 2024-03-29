<?php

#Task 1. Регулярные выражения
#Пункт а)

$str = 'ahb acb aeb aeeb adcb axeb'; // Исходная строка
$regexp = '!a[a-z]{2}b!'; // Регулярное выражение
$matches = []; // Пустой массив

preg_match_all($regexp, $str, $matches); // Ищем слова по шаблону и помещаем в массив

echo "Task 1 <br> a) Изначальная строка: $str <br>";
echo "Найденные слова: ";
foreach($matches[0] as $match)
{
    echo "$match ";
}
echo "<br>";

#Пункт b)
$str2 = 'a1b2c3'; // Строка с числами
$regexp2 = '/[0-9]/'; // Регулярное выражение для цифр
//Ищем в строке цифру и заменяем её на куб с помощью безымянной функции
$replacedStr = preg_replace_callback($regexp2, function($matches) { return (string)($matches[0]**3); }, $str2);
echo "b) Изначальная строка: $str2<br>";
echo "Изменённая строка:  $replacedStr";




