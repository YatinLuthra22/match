<?php
$x =10;
$y = 2;
$z = '10';
var_dump($x ** $y);//Raise to the power
var_dump($x + $y);
var_dump(fdiv($x , $y));
var_dump($x * $y);
var_dump(-$z);
//Assignment Operators
$x = 5;
echo $x;
$x = ($y=50) + 10;//Another way of siging
echo "<br>";
echo $x;
echo "<br>";
echo $y;
$aa = 5;
$aa += 3;
$aa /= 2;
$aa **= 2;
echo "<br>";
echo $aa;
// string operators
$x = 'Hello';
$x = $x . ' '.'world';
echo "<br>";
echo $x;
$x .=' world';
echo "<br>";
echo $x;
//Compare Operators
$a = 24;
$b ='24';echo "<br>";
var_dump($a == $b);echo "<br>";
var_dump($a === $b);echo "<br>";//Difference Between == and ===
var_dump($a != $b);echo "<br>";//Result will be opposite
var_dump($a !== $b);echo "<br>";
var_dump($a >= $b);echo "<br>";
$c = 'HellO WORLD';
$y = strpos($c,'O');//For finding the posotion
/*if ($y ===false)
{
    echo 'H not found';

}
else {
    echo 'H found at index'.$y;
}
*/
$result = $y === false ? 'H not found' : 'H found at index' . $y; 
echo "<br>";
echo $result;echo "<br>";
//ERROR CONTROL OPERATORS == @


// increment and decrement operators
$x = 25;
$y = 'abc';
echo $x++;echo "<br>";
echo $x;echo "<br>";
echo ++$x;echo "<br>";
echo ++$y;echo "<br>";//++ operator can work on string


//logical operators(&& , || , and , xor )
$x = true;
$y = false;
/*echo "<br>";
var_dump($x||$y);echo "<br>";
var_dump($x && $y);echo "<br>";
var_dump($x and $y);echo "<br>";
var_dump($x xor $y);*/echo "<br>";
function hello()
{
    echo "Hey";
    return false;
}
var_dump($x ||hello()|| true );echo "<br>";// xor == Heybool(false)   and  == Heybool(true)   &&  == Heybool(true)  || ==  bool(true)
var_dump($y && hello()||true );echo "<br>";// xor == Heybool(True)   and == bool(false)   && == bool(true)  || == heybool(true)

//Operators on arrays
//$e =array('Red', 'Yellow');
//$f = array('Green','Blue');

//print_r($e+$f);
// echo $e + $f;echo "<br>";
// function check()
// {
//     if ($e!=$f)
//     {
//         echo "Not Equal";
//     }
// }
// echo check();









