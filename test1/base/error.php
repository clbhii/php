<?php
if(!file_exists("welcome1.txt"))
{
//     die("文件不存在");
    echo "文件不存在";
}
else
{
    $file=fopen("welcome1.txt","r");
}
?>


<?php
// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}

// 设置错误处理函数
set_error_handler("customError");

// 触发错误
echo($test);
?>

<?php
$test=2;
if ($test>1)
{
    trigger_error("变量值必须小于等于 1");
}
?>