<?php
$name = 'Gio';
echo $name . "<br/>"; //<br/>==next line
$_123name = ' problem';
echo $_123name . "<br/>";
$x = 1;
$y = &$x; //the value of x is stored in y 
$x = 3;
echo $y . "<br/>";
$firstname = 'Yatin';
echo "Hello {$firstname}" . "<br/>";
echo 'Hello' . $firstname . "<br/>";
echo 'Hello' . $firstname . "<br/>";
// Contants
define('STATUS_PAID', 'paid'); // defining a constant
echo defined('STATUS_PAID') . "<br/>"; //Checking whether a constant is defined or not
echo STATUS_PAID . "<br/>";
const STATUS_NOTPAID = 'not paid'; // defing a constant with another way
echo STATUS_NOTPAID . "<br/>";
/*
if(true)
{
    const Foo ='bar';// Will not work
    define('STATUS_1PAID',9);// will work
}
*/
$paid = 'Paid1'; // Defining a constant another way
define('STATUS_' . $paid, 4);
//echo STATUS_Paid1 . "<br/>";
echo __LINE__ . "<br/>"; //Printing the prsent  line number
echo __FILE__ . "<br/>"; ////Printing the path of the code file
$foo = 'bar'; //creating variable
$$foo = 'baz'; //creating variable variable
echo "$foo,$bar" . "<br/>";
echo $foo, " ", $$foo . "<br/>";



