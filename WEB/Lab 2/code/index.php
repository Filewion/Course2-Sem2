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

#Работа с min и max
$numbers = [4,-2,5,19,-130,0,10];
$minnum = min($numbers); echo "Min = $minnum <br>";
$maxnum = max($numbers); echo "Max = $maxnum <br>";

#Работа с рандомом
echo rand(1,100),"<br>";
$randarray = array();
for ($i = 0;$i < 10; $i++)
    $randarray[$i] = rand(1,100);
foreach($randarray as $item )
    echo "$item ";
echo "<br>";

#Работа с модулем
$a = 100;
$b = 101;
$abs_ = abs($a - $b);
echo $abs_,"<br>";
$array1 = [1,2,-1,-2,3,-3];
$absarray = array();
for ($i = 0; $i < 6;$i++)
    $absarray[$i] = abs($array1[$i]);
foreach($absarray as $item )
    echo "$item ";
echo "<br>";

#Task 7. Общее
$numdivs = array();
$number1 = 30;
for ($i = 1; $i < round(sqrt($number1)) + 1; $i++) #проходим до корня числа, чтобы не повторяться
    if ($number1 % $i == 0)
        array_push($numdivs, $i, $number1 / $i); #добавляем сам делитель и число/делитель
foreach($numdivs as $item )
    echo "$item ";
echo "<br>";

$array2 = [1,2,3,4,5,6,7,8,9,10];
$c = 0; $count = 0;
while($count <= 10)
{
    $count += $array2[$c];
    $c++;
}
echo $c,"<br>";

#Task 8 - Функции
function printStringReturnNumber()
{
    echo "Я — часть той силы, что вечно хочет зла и вечно совершает благо<br>";
    return 987;
}
$my_num2 = printStringReturnNumber();
echo $my_num2,"<br>";

function increaseEnthusiasm(string $str)
{
    return "$str!";
}
echo increaseEnthusiasm("Рукописи не горят"), "<br>";

function repeatThreeTimes(string $str)
{
    return $str.$str.$str;
}
echo repeatThreeTimes("Буп"), "<br>";
echo increaseEnthusiasm(repeatThreeTimes("Га")), "<br>";

function cut(string $str123, $letters = 10)
{
    return substr($str123, 0, $letters);
}
$my_string_im_tired = "i can`t feel my eyes";
echo cut($my_string_im_tired, 10),"<br>";

$numarray = [0,1,2,3,4,5,6,7];
function printarray($arr)
{
    echo array_shift($arr)," ";
    if (!empty($arr))
        printarray($arr);
    else
        return;
}
printarray($numarray);
echo "<br>";

function morethen9sum($some) #господи помогите
{
    $splitted = str_split($some); # разделяем на отдельные цифры
    $some = array_sum($splitted); # суммируем
    if ($some > 9)
        return morethen9sum($some);
    else
        return $some;
}
echo morethen9sum(954),"<br>";







































