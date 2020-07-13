<?php
    /*
     * https://www.runoob.com/php/php-operators.html
     */
    $x = 10;
    $y = 6;
    echo($x - $y);
    echo PHP_EOL;
    echo($x + $y);
    echo PHP_EOL;
    echo($x/$y);
    echo PHP_EOL;
    echo($x%$y);
    echo PHP_EOL;
    echo -$x;
    echo PHP_EOL;
    echo intdiv($x, $y);
    echo PHP_EOL;
    
    echo($x++);
    echo PHP_EOL;
    echo(++$x);
    echo PHP_EOL;
    
    var_dump($x > 8 and $y < 8);
    var_dump($x > 8 or $y < 8);
    var_dump($x > 8 xor $y < 8);
    var_dump($x > 8 && $y < 8);
    var_dump($x > 8 || $y < 8);
    
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    $z = $x + $y; // $x 和 $y 数组合并
    var_dump($z);
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x <> $y);
    var_dump($x !== $y);
    
    $test = '菜鸟教程';
    // 普通写法
    $username = isset($test) ? $test : 'nobody';
    echo $username, PHP_EOL;
    
    //组合比较符(PHP7+)
    /*
     *     解析如下：
    
    如果 $a > $b, 则 $c 的值为 1。
    如果 $a == $b, 则 $c 的值为 0。
    如果 $a < $b, 则 $c 的值为 -1。
     */
    $c = $a <=> $b;

    echo 1 <=> 1, PHP_EOL; // 0
    echo 1 <=> 2, PHP_EOL; // -1
    echo 2 <=> 1, PHP_EOL; // 1
   /*
    * 运算符优先级中，or 和 ||，&& 和 and 都是逻辑运算符，效果一样，但是其优先级却不一样。
    */
    $a = 3;
    $b = false;
    $c = $a or $b;
    var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
    $d = $a || $b;
    var_dump($d);          //这里的 $d 就是 boolean 值 true 
    var_dump(($a + 1) * 10);
?>