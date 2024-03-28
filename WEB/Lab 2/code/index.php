<?php
#Task 1 - Доступ по ссылке
# Важно: т.к. проверка написанного осуществлялась на странице сайта
# то вместо \n(который не осуществлял перенос строки) был использован <br>

# (!) Так же хочу отметить, что я понимаю, что использование "шуточных" названий переменных
# ниже не есмь хорошее решение, в следующих лабах они будут информативны.

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ' but I`m vegan =(';

// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.<br>";

echo "<br>";
#Task 2 - Числа

$mypersonalheaven = 666;
echo $mypersonalheaven; echo "<br>";
$mypersonalhell = 666.666;
echo $mypersonalhell; echo "<br>";
echo 10-5+7; echo "<br>";
$last_month = 1187.23; $this_month = 1089.98;
echo $last_month - $this_month; echo "<br>";

echo "<br>";

#Task 3 - Умножение и деление
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language; echo "<br>";
echo "<br>";

#Task 4 - Степень
echo 8**2; echo "<br>";
echo "<br>";

#Task 5 - Операторы присвоения
$my_num = 42;
$answer = $my_num;
$answer += 2; $answer *= 2; $answer -= 2; $answer /= 2; # места много занимает ;)
$answer -= $my_num;
echo $answer; echo "<br>"; #реально 1...
echo "<br>";
#Task 6 - Мат. функции
# Работа с %
$a = 10; $b = 3;
$ostatok = $a % $b;
$result = $a / $b;
echo "$ostatok<br>";
if(0 === $ostatok) {
    echo "Делится $result<br>";
} else {
    echo "Делится с остатком $ostatok<br>";
}

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
echo round($opyatkoren),"<br>";
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
$randarray = [];
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
$absarray = [];
for ($i = 0; $i < 6;$i++)
    $absarray[$i] = abs($array1[$i]);
foreach($absarray as $item )
    echo "$item ";
echo "<br>";
echo "<br>";
#Task 7. Общее
$numdivs = [];
$number1 = 30;
for ($i = 1; $i < round(sqrt($number1)) + 1; $i++) #проходим до корня числа, чтобы не повторяться
    if (0 === $number1 % $i ) {
        array_push($numdivs, $i, $number1 / $i); #добавляем сам делитель и число/делитель
    }
foreach($numdivs as $item )
    echo "$item ";
echo "<br>";

$array2 = [1,2,3,4,5,6,7,8,9,10];
$c = 0; $count = 0;
while(10 >= $count)
{
    $count += $array2[$c];
    $c++;
}
echo $c,"<br>";
echo "<br>";
#Task 8 - Функции
function printStringReturnNumber(): int
{
    echo "Я — часть той силы, что вечно хочет зла и вечно совершает благо<br>";
    return 987;
}
$my_num2 = printStringReturnNumber();
echo $my_num2,"<br>";

function increaseEnthusiasm(string $str) : string
{
    return "$str!";
}
echo increaseEnthusiasm("Рукописи не горят"), "<br>";

function repeatThreeTimes(string $str) : string
{
    return $str.$str.$str;
}
echo repeatThreeTimes("Буп"), "<br>";
echo increaseEnthusiasm(repeatThreeTimes("Га")), "<br>";

function cut(string $str123, int $letters = 10) : string
{
    return substr($str123, 0, $letters);
}
$my_string_im_tired = "i can`t feel my eyes";
echo cut($my_string_im_tired, 10),"<br>";

$numarray = [0,1,2,3,4,5,6,7];
function printarray(array $arr)
{
    echo array_shift($arr), " ";
    if (true === empty($arr)) {
        printarray($arr);
    }
}
printarray($numarray);
echo "<br>";

function morethen9sum(int $some) : int #господи помогите
{
    $splitted = str_split($some); # разделяем на отдельные цифры
    $some = array_sum($splitted); # суммируем
    if (9 < $some) {
        return morethen9sum($some);
    } else {
        return $some;
    }
}
echo morethen9sum(954),"<br>";

echo "<br>";

#Task 9 - Массивы
$arrayhelpme = [];
$helpstr = "x";
for($i = 0; $i<5;$i++)
{
    $arrayhelpme[$i] = $helpstr;
    $helpstr .= "x";
}
foreach($arrayhelpme as $item )
    echo "$item ";
echo "<br>";

function arrayFill(string $str,  int $count)
{
    $arrayfilled = [];
    for($i = 0; $i < $count;$i++)
        $arrayfilled[$i] = $str;
    foreach($arrayfilled as $item )
        echo "$item ";
}
arrayFill('x', 5);
echo "<br>";

$ocherednoi = [[1, 2, 3], [4,5,6,7], [0]];
$summa = 0;
foreach ($ocherednoi as $och)
    foreach ($och as $item)
        $summa += $item;
echo $summa, "<br>";

$mass1 = []; $mass2 = [];

$num1 = 1;
for ($i = 0; $i < 3; $i++)
{
    for ($j = 0; $j < 3;$j++)
    {
        $mass2[$j] = $num1;
        $num1++;
    }
    $mass1[$i] = $mass2;
}
foreach ($mass1 as $m1)
{
    foreach ($m1 as $item)
    {
        echo $item." ";
    }
}
echo "<br>";

$esheodin = [2, 5, 3, 9];
$result = $esheodin[0]*$esheodin[1] + $esheodin[2]*$esheodin[3];
echo $result, "<br>";

$user = ['name' => 'Pomogite', 'surname' => 'Gospodi', 'patronymic' => 'Mne'];
echo "{$user['surname']} {$user['name']} {$user['patronymic']}<br>";

$date = ['year' => 2024, 'month' => 3, 'day' => 10]; #ой...
echo "{$date['year']}-{$date['month']}-{$date['day']}<br>";

$arrwithsomething = ['a', 'b', 'c', 'd', 'e'];
echo count($arrwithsomething), "<br>";

echo end($arrwithsomething), prev($arrwithsomething), "<br>";
echo "<br>";


#Task 10 - if/else

function boolfunc(int $a, int $b) : bool
{
    return (10 < $a+$b);
}
echo boolfunc(10, 9), "<br>";

function boolfunc2(int $a, int $b) : bool
{
    return ($a === $b);
}
echo boolfunc2(5,5), "<br>";

$test = false;
if(true == $test) echo "верно<br>";

$age = 55;
if (10 > $age  or 99 < $age) {
    echo "$age is not in [10,99] <br>";
} else {
    $sum = array_sum(str_split($age));
    if (9 >= $sum) {
        echo "сумма цифр однозначна - $sum";
    } else {
        echo "сумма цифр двузначна - $sum";
    }
    echo "<br>";
}

$nespim = [6, 6, 6];
if (3 === count($nespim)) {
    echo $nespim[0] + $nespim[1] + $nespim[2], "<br>";
}
echo "<br>";

#Task 11 - Циклы
for ($i = 1; $i < 21; $i++)
{
    for ($j = 0; $j < $i; $j++) echo "x";
    echo "<br>";
}
echo "<br>";

#Task 12 - Комбинация функций (благослави господь дочитавшего)

$godblessyou = [2, 4, 3, 4, 5, 9];
$godsum = array_sum($godblessyou);
$godcount = count($godblessyou);
echo $godsum / $godcount, "<br>";

$sum100 = (1 + 100) * 100 / 2; # арифметическая прогрессия ;)
echo $sum100, "<br>";

$goodarray = [4, 9, 16, 25, 36];
$newgoodarray = array_map('sqrt', $goodarray); #применяем функцию корня ко всем элементам массива
foreach($newgoodarray as $item)
    echo "$item ";
echo "<br>";

$keys = range('a','z');
$values = range(1,26);
$sleepyarray = array_combine($keys, $values); #собираем новый массив из ключей и значений
foreach($sleepyarray as $item => $num)
    echo "Letter " . $item . ", Value= " . $num, "<br>";
echo "<br>";

$finallytheend = "1234567890";
$finallyarray = str_split($finallytheend,2 );# делим строку по два символа, каждый из них будет элементом массива
echo array_sum($finallyarray);














































