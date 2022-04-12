<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="welcome.php" method="POST">
        <label for="username">Username:</label> 
        <input type="text" name="username" id="username" placeholder="Type your username">   <br>
        <label for="pass">password:</label>
        <input type="password" name="pass" id="pass" placeholder="Type your password"> <br>
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
    </form>
</body>
</html>








<!-- <html>

<body>
    <form action="data.php" method="get">
        Username:<input type="text" name="username"><br><br>
        Email:<input type="email" name="email"><br><br>
        Contact:<input type="number" name="contact"><br><br>
        Password:<input type="password" name="password"><br><br>
        Comment:
        <textarea name="comment" rows="5" cols="40">
    </textarea><br><br>


        Submit:<input type="submit">













</body>

</html> -->