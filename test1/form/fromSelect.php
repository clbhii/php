
<?php
/*
*$_GET 变量接受所有以 get 方式发送的请求，及浏览器地址栏中的 ? 之后的内容。
$_POST 变量接受所有以 post 方式发送的请求，例如，一个 form 以 method=post 提交，提交后 php 会处理 post 过来的全部变量。
$_REQUEST 支持两种方式发送过来的请求，即 post 和 get 它都可以接受，显示不显示要看传递方法，get 会显示在 url 中（有字符数限制），post 不会在 url 中显示，可以传递任意多的数据（只要服务器支持）。
什么是 htmlspecialchars()方法?

htmlspecialchars() 函数把一些预定义的字符转换为 HTML 实体。
预定义的字符是：

& （和号） 成为 &amp;
" （双引号） 成为 &quot;
' （单引号） 成为 &#039;
< （小于） 成为 &lt;
> （大于） 成为 &gt;
*/
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
if($q) {
        if($q =='RUNOOB') {
                echo '菜鸟教程 http://www.runoob.com';
        } else if($q =='GOOGLE') {
                echo 'Google 搜索 http://www.google.com';
        } else if($q =='TAOBAO') {
                echo '淘宝 http://www.taobao.com';
        }
		echo '<br>';
} else {
?>
<form action="" method="get">
	<select name="q">
		<option value="">选择一个站点:</option>
		<option value="RUNOOB">Runoob</option>
		<option value="GOOGLE">Google</option>
		<option value="TAOBAO">Taobao</option>
	</select> <input type="submit" value="提交">
</form>
<?php
}
?>

<?php
$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
            'RUNOOB' => '菜鸟教程: http://www.runoob.com',
            'GOOGLE' => 'Google 搜索: http://www.google.com',
            'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
		echo '<br>';
    }
      
} else {
?>
<form action="" method="post"> 
    <select multiple="multiple" name="q[]">
    <option value="">选择一个站点:</option>
    <option value="RUNOOB">Runoob</option>
    <option value="GOOGLE">Google</option>
    <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
    </form>
<?php
}
?>


<?php
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
if($q) {
        if($q =='RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com';
        } else if($q =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';
        } else if($q =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';
        }
} else {
?><form action="" method="get"> 
    <input type="radio" name="q" value="RUNOOB" />Runoob
    <input type="radio" name="q" value="GOOGLE" />Google
    <input type="radio" name="q" value="TAOBAO" />Taobao
    <input type="submit" value="提交">
</form>
<?php
}
?>