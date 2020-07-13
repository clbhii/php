<?php
    /*
     * https://www.runoob.com/php/php-namespace.html
     */
    namespace MyProject;

    define("GREETING", "欢迎访问");
    echo GREETING;
    echo PHP_EOL;
    function myTest() {
        echo GREETING;
    }
    myTest();
    
    /*
     * PHP 向它运行的任何脚本提供了大量的预定义常量。
            不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，或者动态加载后，或者在编译时已经包括进去了。
            有八个魔术常量它们的值随着它们在代码中的位置改变而改变。
     */
    echo '这是第 " '  . __LINE__ . ' " 行';
    echo PHP_EOL;
    echo '该文件位于 " '  . __FILE__ . ' " ';
    echo PHP_EOL;
    echo '该文件位于 " '  . __DIR__ . ' " ';
    echo PHP_EOL;
    function test() {
        echo '函数名为:' . __FUNCTION__;
    }
    test();
   
    class test1{
        function _print() {
            echo '类名为:' . __CLASS__ . "<br>";
            echo PHP_EOL;
            echo '函数名为:' . __FUNCTION__;
        }
    }
    $t = new Test1();
    $t -> _print();
    
    class Base{
        public function sayHello() {
            echo 'Hello';
        }
    }
    trait SayWorld{
        public function sayHello() {
            parent::sayHello();
            echo ' World';
        }
    }
    class MyHelloWorld extends Base {
        use SayWorld;
    }
    echo PHP_EOL;
    $o = new MyHelloWorld();
    $o ->sayHello();
    
    function test2() {
        echo  '函数名为：' . __METHOD__ ;
    }
    echo PHP_EOL;
    test2();
    
    echo PHP_EOL;
    echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
    
?>