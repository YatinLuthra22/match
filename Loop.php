<?php
$x = 0;
$y = 0;
while($x <= 100)
{
    echo"The Number is : $x<br>";
    $x++;
}
echo "<br>";
echo "Do while";echo "<br>";
do
{
    echo "The number is :$x<br>";
    $x++;
}while($x<200);
echo "<br>";
echo "FOR";echo "<br>";
for($x =0;$x<=100;$x++)
{
    echo"The number is : $x<br>";
}
//ForEach Loops
echo "<br>";
echo "Foreach";echo "<br>";
$colors = array("Red","Green","Blue","Yellow");
foreach ($colors as $value){
    echo"$value<br>";
}
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"36","Doe"=>"39");
foreach($age as $x=>$val){
    echo "$x's age is $val<br>";
}
//Break
for($x = 0;$x<10;$x++){
    if($x==4)
    {
        break;
    }
    echo"The number is :$x<br>";
}
echo"<br>$x";