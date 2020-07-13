<?php
/*
 * String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
 * 
 */
$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;

$x = 5985;
var_dump($x); //var_dump() 函数返回变量的数据类型和值
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);

$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);

$x=true;
$y=false;
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

$cars=array("Volvo","BMW","Toyota");
var_dump($cars);


class Car
{
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

$x=null;
var_dump($x)
?>