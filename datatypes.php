<?php

$completed = true; //Bool
$score = 75; //Integer
$price = 0.99; //Flaot
$greeting = "Hello Gio"; //string
echo $completed . "<br/>";
echo $score . '<br/>';
echo $price . '<br/>';
echo $greeting . '<br/>';
echo gettype($completed) . "<br/>"; //Tell the type of datatype
echo gettype($score) . "<br/>";
echo gettype($price) . "<br/>";
echo gettype($greeting) . "<br/>";
/*var_dump($score)."<br/>";//Gives every information of the variable
 var_dump($price)."<br/>";
 var_dump($greeting)."<br/>";
 var_dump($completed)."<br/>";*/
$companies = [1, 2, 3, 4, 5, 6, 7, 'a', 'b', false];
print_r($companies) . "<br/>";
//boolean
$isComplete = false;
if ($isComplete) {
    echo "</br>";
    echo "Hello";
} else {
    echo "</br>";
    echo "False";
}
$a = 10;
$b = 20;
echo "<br>";
$c = $a + $b;
echo $c;
//intger
$d = PHP_INT_MAX + 1;
echo "<br>";
echo $d;
$e = 2_0000_000_000;
echo "<br>";
echo $e;
//float
$f = 2_0090.32;
echo "<br>";
echo $q;
echo "<br>";
var_dump($f);
//String
$firstname = "Will";
$secondname = "Smith";
$name = $firstname . ' ' . $secondname;
echo "<br>";
echo $name;
echo "<br>";
echo $name[-2];
$name[-2] = 'L';
echo "<br>";
echo $name; //Heredoc
$text = <<<TEXT
<br>
LINE 1 $firstname
LINE 2 $secondname
LINE 2
LINE 3
TEXT;
echo nl2br($text); //NowDoc
$yext = <<<'TEXT'
<br>
LINE 1 $firstname
LINE 2 $secondname
LINE 4
TEXT;
echo nl2br($yext);
//NULL
$g = null;
echo "<br>";
var_dump($g);
echo "<br>";
var_dump(is_null($g));
echo "<br>";
var_dump((string)$g);
echo "<br>";
var_dump((array)$g);
echo "<br>";
var_dump((int)$g);
echo "<br>";
var_dump((float)$g);
//Array
$ProgrammingLanguages = ['PHP', 'Java', 'Python'];
echo "<br>";
echo $ProgrammingLanguages[0];
echo "<br>";
echo $ProgrammingLanguages[1];
echo "<br>";
echo $ProgrammingLanguages[2];
echo "<br>";
var_dump(isset($ProgrammingLanguages[3]));
echo "<br>";
var_dump(isset($ProgrammingLanguages[2]));
echo '<pre>';
print_r($ProgrammingLanguages);
echo '</pre';
$ProgrammingLanguages[] = 'C++';

array_push($ProgrammingLanguages, 'C', 'Go');


echo '<pre>';
print_r($ProgrammingLanguages);
echo '</pre';
echo "<br>";
echo count($ProgrammingLanguages);
$ProgrammingLanguages =
    [
        'php' => '8.0',
        'python' => '3.9',
    ];
echo '<pre>';
print_r($ProgrammingLanguages);
echo '</pre';
echo "<br>";
echo $ProgrammingLanguages['php'];
$ProgrammingLanguages['go'] = '1.15';
echo '<pre>';
print_r($ProgrammingLanguages);
echo '</pre';
$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];
print_r($array);
echo $array[null];
$array = ['a', 'b', 'c', 'd', null => 'e', 'f'];
echo array_pop($array); //delete the last element of the array
print_r($array);
echo array_shift($array);
echo "<br>";
print_r($array);//deletw the first element of the array
