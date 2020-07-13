<?php
class Site {
    /**
     * 关键字 $this   self，parent 或 static
     *  ->用来引用对象的成员（属性与方法）；
     *  ::双冒号操作符即作用域限定操作符Scope Resolution Operator可以访问静态、const和类中重写的属性与方法
     */
    /* 成员变量 */
    var $url;
    var $title;
    
    /*一个类只能有一个构造方法*/
    function __construct( $par1, $par2 ) {
        $this->url = $par1;
        $this->title = $par2;
    }
    //对象销毁时调用
    function __destruct() {
        print "销毁 " . $this->name . "\n";
    }
    
    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }
    
    function getUrl(){
        echo $this->url . PHP_EOL;
    }
    
    function setTitle($par){
        $this->title = $par;
    }
    
    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}



$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();


/*
 * 继承（不能多继承）
 */
class Child_Site extends Site {
    var $category;
    
    function setCate($par){
        $this->category = $par;
    }
    
    function getCate(){
        echo $this->category . PHP_EOL;
    }
    //覆盖或是重写
    function getUrl() {
        echo $this->url . PHP_EOL;
        return $this->url;
    }
    
    function getTitle(){
        echo $this->title . PHP_EOL;
        return $this->title;
    }
}

/*
 * 访问控制
PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。

public（公有）：公有的类成员可以在任何地方被访问。
protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
private（私有）：私有的类成员则只能被其定义所在的类访问。
 */


class MyClass
{
    //类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';
    
    function printHello()
    {
        echo $this->public, PHP_EOL;
        echo $this->protected, PHP_EOL;
        echo $this->private, PHP_EOL;
    }
}

$obj = new MyClass();
echo $obj->public, PHP_EOL; // 这行能被正常执行
// echo $obj->protected; // 这行会产生一个致命错误
// echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private


class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';
    
    function printHello()
    {
        echo $this->public, PHP_EOL;
        echo $this->protected, PHP_EOL;
        echo $this->private, PHP_EOL;
    }
    
    //类中的方法可以被定义为公有，私有或受保护。如果没有设置这些关键字，则该方法默认为公有。
    // 声明一个公有的构造函数
    public function __construct() { }
    
    // 声明一个公有的方法
    public function MyPublic() { }
    
    // 声明一个受保护的方法
    protected function MyProtected() { }
    
    // 声明一个私有的方法
    private function MyPrivate() { }
    
    // 此方法为公有
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$obj2 = new MyClass2();
echo $obj2->public, PHP_EOL; // 这行能被正常执行
// echo $obj2->private; // 未定义 private
// echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined



// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
class Template implements iTemplate
{
    private $vars = array();
    
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        
        return $template;
    }
}


class MyClass4
{
    const constant = '常量值';
    
    function showConstant() {
        echo  self::constant . PHP_EOL;
//         echo  $this->constant;
    }
}

echo MyClass4::constant . PHP_EOL;

$classname = "MyClass4";
echo $classname::constant . PHP_EOL; // 自 5.3.0 起

$class = new MyClass4();
$class->showConstant();

echo $class::constant . PHP_EOL; // 自 PHP 5.3.0 起

//抽象类
abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    
    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }
    
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;


/**
 * 声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。

静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。

由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。
 * @author Administrator
 *
 */
class Foo {
    public static $my_static = 'foo';
    
    public function staticValue() {
        return self::$my_static;
    }
}

print Foo::$my_static . PHP_EOL; //静态调用
$foo = new Foo();

print $foo->staticValue() . PHP_EOL; //普通调用


/*
 * 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承。

 */

class BaseClass{
    function __construct() {
        print "BaseClass 类中构造方法" . PHP_EOL;
    }
    public function test() {
        echo "BaseClass::test() called" . PHP_EOL;
    }
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called"  . PHP_EOL;
    }
}


class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
        print "SubClass 类中构造方法" . PHP_EOL;
    }
}
$subClass = new SubClass();
?>