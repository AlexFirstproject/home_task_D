<?php
// первое
$int = 5;
$float = 1.5;
$bool = true;
$arr = [1, 2, 3.1, 'string'];
$string = 'строка';
$null = null;

print_r($int);       echo "<br />";
print_r($float);     echo "<br />";
print_r($bool);      echo "<br />";
print_r($arr);       echo "<br />";
print_r($string);    echo "<br />";
echo 'NULL: '. print_r($null); echo "<br />"; // как по мне все то же что и var_damp только без типа данных.
echo "<br />";
var_dump($int);      echo "<br />";
var_dump($float);    echo "<br />";
var_dump($bool);     echo "<br />";
var_dump($arr);      echo "<br />";
var_dump($string);   echo "<br />";
echo 'NULL: '. var_dump($null); echo "<br />";// показывает тип и значение переменных.

echo "$int, $float, $bool, $arr, $string, и null: $null <br />"; // выводит в браузер результат действий PHP.
echo "<br />";
var_export($int);    echo "<br />";
var_export($float);  echo "<br />";
var_export($bool);   echo "<br />";
var_export($arr);    echo "<br />";
var_export($string); echo "<br />";
echo 'NULL: '. var_export($null); echo "<br />";// это, а так же exit я пока не совсем понял.
echo "<br />";

//второе

$a = 50;
$b = 100;
$c = $b + $a;

echo "100 + 50 = {$c} <br /><br />";
unset($b);

//третье

$b = 'Александр';

echo "Привет, меня зовут ". $b . "<br /><br />";

//четвертое
$v = 17;
$float = '20.5';
$string = 'key';
$arr = [5, 10, 15, 20, $v => 25, 20 => 'проверка', $float => 'плавающая точка', $string => 'float-25.2<br />'];
var_dump($arr);


echo $arr[2] ."<br />"; //вывел 3 елемент масива.
echo $arr[17] ."<br />";
echo $arr[20] ."<br />";
echo $arr['20.5'] ."<br />";
echo $arr['key'];
echo $arr[0];

?>