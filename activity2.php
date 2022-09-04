<?php
/*
 * 问题1:
    创建一个带有私有属性name、age和breed的Cat类。对于每个属性，创建一个getter &
    setter。另外，创建一个toString()特殊方法，返回以下内容:
    <?php "My " . $this->breed . " ’s name is "
        . $this->name. ". S/he is " . $this->age . " year(s) old."; ?>
 * */
class Cat {
    private $name = null;
    private $age = null;
    private $breed = null;
    public  function getName(){
        return $this->name;
    }
    public  function getAge(){
        return $this->age;
    }
    public  function getBreed(){
        return $this->breed;
    }
    public  function setName($newName){
        $this->name = $newName;
    }
    public  function setAge($newAge){
        $this->age = $newAge;
    }
    public  function setBreed($newBreed){
        $this->breed = $newBreed;
    }
    public function toString(){
        return "My " . $this->breed . " ’s name is "
            . $this->name. ". S/he is " . $this->age . " year(s) old.";
    }
}
?>
<br>

<?php
/*
     * 问题2:
        创建一个继承自Employee类的SoftwareDeveloper和AgileCoach类。
        SoftwareDeveloper类有一个额外的类属性叫做prog lang。AgileCoach也有一个
        额外的类属性称为employees和三个类方法，用于添加、删除、搜索和显示
        所有员工由AgileCoach管理。注意:employees是SoftwareDeveloper对象的列表。
        使用三个SoftwareDeveloper对象和AgileCoach对象提供显示预期
        输出。
 * */
class Employee {
    protected $first_name;
    protected $last_name;
    protected $salary;
    public function __construct($first_name, $last_name, $salary) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;
    }
    public function __toString() {
        return $this->first_name . " " . $this->last_name;
    }
}
class SoftwareDeveloper extends Employee {
    private $proglang = null;
}
class AgileCoach extends Employee {
    private $employees = null;
    public  function add(){
    }
    public  function del(){
    }
    public  function search(){
    }
    public  function block(){
    }
}
$sft_dev_one = new SoftwareDeveloper("Alfredo", "Boyle", 50000, "C#");
$sft_dev_two = new SoftwareDeveloper("Malik", "Martin", 55000, "JavaScript");
$sft_dev_three = new SoftwareDeveloper("Livia", "Martin", 75000, "Kotlin");
$agile_coach = new AgileCoach("Lillian", "Cunningham", 100000, array($sft_dev_one, $sft_dev_two));
var_dump($sft_dev_one);
var_dump($sft_dev_two);
var_dump($sft_dev_three);
var_dump($agile_coach);
?>


<?php
/*
 *
    Problem 3:
    语言类没有类属性，只有一个叫早安的类方法。 毛利语、西班牙语和德语类继承自语言类。 当您运行以下代码时，发生了什么以及为什么会发生？ 重构代码以显示预期的输出。
 * */
class Language {
    public function good_morning() {
        throw new Exception("good_morning() function not implemented");
    }
}
class Maori extends Language {
    public function good_morning() {
        echo "Morena";
    }
}
class Spanish extends Language {
    public function good_morning() {
        echo "Hola";
    }
}
class German extends Language {
    public function good_morning() {
        echo "Guten Morgen";
    }
}
$maori = new Maori();
$spanish = new Spanish();
$german = new German();
$maori->good_morning();
$spanish->good_morning();
$german->good_morning();
?><?php






/*
 *Problem 4:
    在 Stack 类中实现 push()、pop()、peek()、size() 和 show all() 方法。
     注意：size() 方法返回堆栈的长度，show all() 方法返回堆栈中的项目。
    您可能想知道堆栈是什么。 堆栈是一种抽象数据类型 (ADT)，用于
    以后进先出 (LIFO) 方式存储元素。 堆栈是元素的集合，其中元素的添加在末尾执行，
    元素的删除在开始时执行。堆栈有两种方法：push() 和 pop()。 push 方法将一个元
    素添加到堆栈中。 pop 方法删除添加到堆栈的最后一个元素。使用提供的 Stack 对象来显示预期的输出。
 * */



class Stack
{
    private $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    public function push($item)
    {
        array_push($this->stack,$item);
    }

    public function pop()
    {
        return end($this->stack) . "is at the top of the stack";
    }

    public function peek()
    {
        // Write your code here
    }

    public function is_empty()
    {
        //Write your code here
    }

    public function size()
    {
        return "There are " . count($this->stack) . " item(s) in the stack";
    }

    public function show_all()
    {
        //Write your code here
    }

    public function __toString()
    {
        return json_encode($this->stack);
    }
}

$stack = new Stack();
$stack->push("Introductory App Dev Concepts");
$stack->push("Intermediate App Dev Concepts");
echo $stack;
$stack->push("Advanced App Dev Concepts");
echo $stack->pop();
echo $stack->size();

?>









<?php
/*
 * 问题1:
    创建一个名为App的界面。这个接口有三个方法，login（），register（）&logout（）。
    login（）方法接受两个参数，email和password，register（）方法接受三个参数：email、password和username。创建一个名为Facebook的类，该类实现应用程序。
    对于所实施的每种方法，应重复以下内容：
 * */
interface App {
    public function login($email, $password);
    public function register($email, $password, $username);
    public function logout();
}
class Facebook implements App{
    public function login($email, $password){
        // TODO: Implement login() method.
    }
    public function register($email, $password, $username){
        // TODO: Implement register() method.
    }
    public function logout(){
        // TODO: Implement logout() method.
    }
}
?>