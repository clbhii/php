<?php
/*
 * https://www.runoob.com/php/php-ref-array.html
 * 
 */
function writeName()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName();

function writeName1($fname)
{
    echo $fname . " Refsnes.<br>";
}

echo "My name is ";
writeName1("Kai Jim");

function add($x,$y)
{
    $total=$x+$y;
    return $total;
}

echo "1 + 16 = " . add(1,16);
?>