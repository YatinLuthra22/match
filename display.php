<?php
$data = array($_POST["name"],$_POST["email"],$_POST["username"],$_POST["password"],$_POST["contact"],$_POST["gender"],$_POST["marks"],$_POST["comment"]);

if(empty($data[0]))
{
    echo "<br>";
    echo "Name is Required";
}
else{
    echo "<br>";
    echo "Your name is :";
    test_input($data[0]);
}
if(empty($data[1]))
{
    echo "<br>";
    echo "Email is Required";
}
else{
    echo "<br>";
    echo "Your email is :";
    test_input($data[1]);
}
if(empty($data[2]))
{
    echo "<br>";
    echo "Username is Required";
}
else{
    echo "<br>";
    echo "Your username is :";
    test_input($data[2]);
}
if(empty($data[3]))
{
    echo "<br>";
    echo "Password is Required";
}
else{
    echo "<br>";
    echo "Your password is :";
    test_input($data[3]);
}
if(empty($data[4]))
{
    echo "<br>";
    echo "Contact is Required";
}
else{
    echo "<br>";
    echo "Your contact is :";
    test_input($data[4]);
}
if(empty($data[5]))
{
    echo "<br>";
    echo "Gender is Required";
}
else{
    echo "<br>";
    echo "Your gender is $data[5]";
}
if(empty($data[6]))
{
    echo "<br>";
    echo "Marks are Required";
}
else{
    echo "<br>";
    echo "Your marks are :";
    test_input($data[6]);
}
echo "<br>";
echo "Your comment is : $data[7]";
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>