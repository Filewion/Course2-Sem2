<?php

#Регулярные выражения
#Пункт а)

$str = 'ahb acb aeb aeeb adcb axeb'; // Исходная строка
$regexp = '!a[a-z]{2}b!'; // Регулярное выражение
$matches = []; // Пустой массив

preg_match_all($regexp, $str, $matches); // Ищем слова по шаблону и помещаем в массив

echo "Task 1 <br> a) ";
foreach($matches[0] as $match)
{
    echo "$match ";
}



