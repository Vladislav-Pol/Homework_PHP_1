<?php
//1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму,
//разность, произведение и частное (результат деления).

$a = 10;
$b = 2;

echo $a . " + " . $b . " = " . ($a + $b) . "<br/>";
echo $a . " - " . $b . " = " . ($a - $b) . "<br/>";
echo $a . " * " . $b . " = " . $a * $b . "<br/>";
echo $a . " / " . $b . " = " . $a / $b . "<br/><hr>";


//2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2)

$x = 2;
$y = 6;
$z = 9;
$sum2 = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
echo ("При x = {$x}, y = {$y}, z = {$z},  результат выисления выражения (x+1)4−2(z−2x^2+y^2) равен {$sum2}");
echo "<br/><hr>";

//3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
//результат присвойте переменной $c. Затем создайте переменную $d,
//присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
//в переменную $result. Выведите на экран значение переменной $result.
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;

echo $result;
echo "<br/><hr>";


//4. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих
//переменных и операции сложения строк выведите на экран фразу 'Привет,
//Мир!'.

$text1 = "Привет";
$text2 = "Мир!";

echo ($text1 . " " . $text2);
echo "<br/><hr>";

//5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран
//фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.

$name = "Владислав";

echo "Привет, {$name}!";
echo "<br/><hr>";

//6. Создайте переменную $num и присвойте ей значение '12345'. Найдите
//сумму цифр этого числа.

$num = "12345";
$sum6 = 0;
for ($i = 0; $i < strlen($num); $i++){
    $sum6 += +$num[$i];
}
echo $sum6;


//7. Напишите скрипт, который считает количество секунд в часе, в сутках, в
//месяце, в году и сколько прошло секунд с начала 2000 года.

echo "<hr>" . "Не сделал";

//8. Создайте три переменные - час, минута, секунда. С их помощью выведите
//текущее время в формате 'час:минута:секунда'.
$hour = date("G");
$minut = date("i");
$second = date("s");

echo "<hr>" . $hour . ":" . $minut . ":" .$second;

//9 Переделайте приведенный код так, чтобы в нем использовались операции
//    +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.
//Код для переделки:
//$var = 1;
//$var = $var + 12;
//$var = $var - 14;
//$var = $var * 5;
//$var = $var / 7;
//$var = $var + 1;
//$var = $var - 1;
//echo $var;

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo "<hr>" . $var;




//10. Создайте константу и присвойте ей значение - ваша фамилия, создайте
//соответствующие переменные со сл. значениями: ваше имя, ваше отчество,
//ваш возраст. Проверьте существует ли созданная константа, если да, то
//выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр.
//ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с
//новой строки. Например:
//"Меня зовут Иванов (И. И.).
//Мне 5 лет."

define("surname", "Полоник");
define("name", "Владислав");
define("patronymic", "Владимирович");
define("age", "31");

if (defined("surname")){
    ?><p><hr>
    Меня зовут <?=surname?> (<?=substr(name, 0,1) ?>. <?=substr(patronymic,0, 1)?>.)<br/>
    Мне <?=age?>.
    </p><?
}