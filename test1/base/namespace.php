<?php

/*
 * 
 * https://www.runoob.com/php/php-namespace.html
 */
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { 
        function __construct()
        {
            echo __METHOD__,"\n";
        }}
    function connect() { 
        echo __FUNCTION__,"\n";
    }
    function get($classname)
    {
        $a = __NAMESPACE__ . '\\' . $classname;
//         echo($a);
        return new $a;
    }
    $conn = get("Connection");
    
    $b = __NAMESPACE__ . '\connect' ;//如果使用双引号，使用方法为 __NAMESPACE__ + "\\connect"*/
    $b(); // 输出函数名
    
}

namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}



?>