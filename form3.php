<?php 

include('./welcome3.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form method="POST" action="welcome3.php">
        <label for="username">Username:</label> 
        
        <input type="text" name="username" id="username" placeholder="Type your username" required>   <br>
        <label for="pass">password:</label>
        <input type="password" name="pass" id="pass" placeholder="Type your password"required > <br>
        <label for ="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Type your email"><br>
        <label for ="Contact">Contact:</label>
        <input type="text" name="Contact" id="Contact" placeholder="Type your contact number"><br>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" cols="20" rows="2" placeholder="Type your comment"></textarea><br>
        <label for="gender">Gender:</label>
        
        <input type="radio" name="gender" id="gender" value="male" >Male
        <input type="radio" name="gender" id="gender" value="female">Female
        <input type="radio" name="gender" id="gender" value="others">Other<br>
        <button type="submit" name="submit">Submit</button>
        
</body>
</html>