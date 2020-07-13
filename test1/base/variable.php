<!DOCTYPE html>
<html>
<body>

<?php
/*
 * PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。
这个数组可以在函数内部访问，也可以直接用来更新全局变量。
 */
$x=5; //全局变量
$y=6;
$z=$x + $y;
echo $z;
echo PHP_EOL;

function myTest() {
    global $x;
    $b = 10; //局部变量
    $c =$GLOBALS['x']+$GLOBALS['y'];
    echo "<p>测试函数内变量:<p>";
    echo PHP_EOL;
    echo "变量x为:$x";
    echo PHP_EOL;
    echo "变量b为:$b";
    echo PHP_EOL;
    echo "变量c为:$c";
    echo PHP_EOL;
}
myTest();

echo "<p>测试函数外变量:<p>";
echo PHP_EOL;
echo "变量x为:$x";
echo PHP_EOL;
echo "变量b为:$b";
echo PHP_EOL;

function staticTest() {
    static $d = 0;
    echo $d;
    echo PHP_EOL;
    $d++;
}
staticTest();
staticTest();

function paramTest($e) {
    echo $e;
    echo PHP_EOL;
}
paramTest(5);



?>

</body>
</html>