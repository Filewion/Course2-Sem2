<?php
#Task 1 - Доступ по ссылке
# Важно: т.к. проверка написанного осуществлялась на странице сайта
# то вместо \n(который не осуществлял перенос строки) был использован <br>

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ' but I`m vegan =(';

// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.<br>";

#Task 2 - Числа
$mypersonalheaven = 666;
echo $mypersonalheaven; echo "<br>";
$mypersonalhell = 666.666;
echo $mypersonalhell; echo "<br>";
echo 10-5+7; echo "<br>";
$last_month = 1187.23; $this_month = 1089.98;
echo $last_month - $this_month; echo "<br>";

#Task 3 - Умножение и деление
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language; echo "<br>";

#Task 4 - Степень
echo 8**2; echo "<br>";





