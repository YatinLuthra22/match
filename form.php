<?php

$nameerr = "";

if(empty($_POST['username'])){
    $nameerr = "pleaskjdshdsgf";
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="type your username" >
        <span>
            <?php
            echo $nameerr;
            ?>
        </span>
        <button  type="submit" name="submit">Submit</button>
    </form>
</body>
</html>