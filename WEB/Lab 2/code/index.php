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

#Task 5 - Операторы присвоения
$my_num = 42;
$answer = $my_num;
$answer += 2; $answer *= 2; $answer -= 2; $answer /= 2; # места много занимает ;)
$answer -= $my_num;
echo $answer; echo "<br>"; #реально 1...

#Task 6 - Мат. функции
# Работа с %
$a = 10; $b = 3;
$ostatok = $a % $b;
$result = $a / $b;
echo "$ostatok<br>";
if($ostatok == 0)
    echo "Делится $result<br>";
else
    echo "Делится с остатком $ostatok<br>";

# Работа со степенью и корнем
$st = pow(2,10); echo "$st<br>";
$koren = sqrt(245); echo "$koren<br>";

$array = [4,2,5,19,13,0,10];
$noway_sum = 0;
foreach ($array as $iterator)
    $noway_sum += pow($iterator,2);
$NOWAY_sum = sqrt($noway_sum);
echo "$NOWAY_sum<br>";

#Работа с функциями округления
$opyatkoren = sqrt(379);
echo round($opyatkoren,0),"<br>";
echo round($opyatkoren,1),"<br>";
echo round($opyatkoren,2),"<br>";
$koren2 = sqrt(587);

$ceilsqrt = ceil($koren2);
$floorsqrt = floor($koren2);
$my_perfect_array = array("ceil"=>$ceilsqrt,"floor"=>$floorsqrt);

foreach($my_perfect_array as $item => $num)
    echo "Type - " . $item . ", Value= " . $num, "<br>";
























