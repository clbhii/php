<?php
/*
 * mixed json_decode ($json_string [,$assoc = false [, $depth = 512 [, $options = 0 ]]])
 * 参数
json_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据

assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。

depth: 整数类型的参数，它指定递归深度

options: 二进制掩码，目前只支持 JSON_BIGINT_AS_STRING 。
 */



$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$arrStr = json_encode($arr);
echo $arrStr;

var_dump(json_decode($arrStr)); //转换对象
var_dump(json_decode($arrStr, true)); //转换数组
?>


<?php
   class Emp {
       public $name = "";
       public $hobbies  = "";
       public $birthdate = "";
   }
   $e = new Emp();
   $e->name = "sachin";
   $e->hobbies  = "sports";
   $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

   echo json_encode($e);
?>