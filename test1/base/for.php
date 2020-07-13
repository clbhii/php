<?php

$i = 1;
while($i <=5) {
    echo "the number is" . $i . "<br>";
    $i++;
}
echo PHP_EOL;
do{
    echo "the number is" . $i . "<br>";
    $i++;
}while ($i <=10);
echo PHP_EOL;
for ($i=1; $i<=5; $i++)
{
    echo "The number is " . $i . "<br>";
}
echo PHP_EOL;
$x=array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br>";
}
?>