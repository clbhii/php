<?php

    $cars = array("volvo", "bmw", "toyota");
    echo "i like " . $cars[0];
    echo PHP_EOL;
    echo count($cars), PHP_EOL;
    
    for($i=0; $i < count($cars); $i++) {
        echo $cars[$i], PHP_EOL;
    }
    
    //关联数组
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";
    echo PHP_EOL;
    foreach ($age as $key => $val){
        echo $key . "," . $val;
        echo PHP_EOL;
    }
    /*
     * sort() - 对数组进行升序排列
        rsort() - 对数组进行降序排列
        asort() - 根据关联数组的值，对数组进行升序排列
        ksort() - 根据关联数组的键，对数组进行升序排列
        arsort() - 根据关联数组的值，对数组进行降序排列
        krsort() - 根据关联数组的键，对数组进行降序排列

     */
    sort($cars);
    rsort($cars);
    
    asort($age);
    ksort($age);
    
    arsort($age);
    krsort($age);
    
    $sites = array
    (
        "runoob"=>array
        (
            "菜鸟教程",
            "http://www.runoob.com"
        ),
        "google"=>array
        (
            "Google 搜索",
            "http://www.google.com"
        ),
        "taobao"=>array
        (
            "淘宝",
            "http://www.taobao.com"
        )
    );
    print("<pre>"); // 格式化输出数组
    print_r($sites);
    print("</pre>");
?>