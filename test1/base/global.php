<html>
<body>
<?php

/*
 * $GLOBALS
 $_SERVER
 $_REQUEST
 $_POST
 $_GET
 $_FILES
 $_ENV
 $_COOKIE
 $_SESSION
 *https://www.runoob.com/php/php-superglobals.html
 */
$x = 75;
$y = 25;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z; 
echo "<br>";


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_REQUEST['fname'];
echo $name;
?>

<?php 
$name = $_POST['fname']; 
echo $name; 
?>
</body>
</html>