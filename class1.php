
Zihan Liu activity 1
<br>


Q1
<?php
$name='John';
$age='55';
echo "My name is $name,I'm $age years old";
?>
<br>






Q2
<?php
$x = 1957452;
$y = 2975635;
echo $x + $y;

?>
<br>


Q3
<?php
$array = array(45.3, 67.5, -45.6, 20.34, -33.0, 45.6);

 echo  $average = array_sum($array)/ count($array);

?>
<br>


Q4
<?php
for ($i = 1; $i <= 15; $i += 2) { 
    if($i%15==0)
    echo 'FizzBuzz';
    elseif($i%3==0)
    echo 'Fizz';
    elseif($i%5==0)
    echo 'Buzz';
    else
    echo $i;
    
}

?>
<br>



Q5
<?php/*
$numbers = array(21, 19, 68, 55, 42, 12);
$oddArray = array();
$size = count($numbers);
for ($i = 0; $i < $size; $i++) {
    echo "$numbers[$i] ";
}
  $odd= "";
  $k = 0;
for($i=1;$i<$numbers;$i++)
{
  if($i%1==0)
  {
    $oddArray[$k] = $numbers[$i];
    $k++; 
  }
  echo "\nArray of odd numbers : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}   }


// Write your solution here
// Expected output:
// 19
// 21
// 55
?>
<br>
*/
Q6

function is_anagram($str1, $str2)

$s1 = $str1;
$s2 = $str2;
if (strlen($s1) != strlen($s2))
{
echo "The entered strings $str1 and $str2 are not anagram";
}


if (strcmp($s1, $s2) == 0) {
echo "The entered strings $str1 and $str2 are anagram.";
} 

<br>




Q7<?php
function timeToSeconds(string $time): int
{
    $arr = explode(':', $time);
    if (count($arr) === 3) {
        return $arr[0] * 3600 + $arr[1] * 60 + $arr[2];
    }
    return $arr[0] * 60 + $arr[1];
}
echo timeToSeconds('63:0');
?>
<br>








Q8
<?php

function check_palindrome($string)

{
if ($string == strrev($string))
return "true";
else
return "false";
}
echo (("//") . (check_palindrome('ama')."\n"));
?>

<br>




Q9<?php
// Write your solution here is_five_letters(["car", "bike","truck"]);
// Expected output:
// ["truck"]
?>







Q10
<?php
function primeCheck($numbers)
{
if ($numbers== 1)
return false;
for ($i = 2; $i <= $numbers/2; $i++)
{
if ($numbers % $i == 0)
{
return false;
}
}
return true;
}
$primeNumber = primeCheck(13);

if ($primeNumber == true)
{
echo "// true";
}
else
{
echo "//false";
}
?>








