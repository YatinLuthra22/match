<?php



    //variables for date insert 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $marks = $_POST["marks"];   
      $data = array($_POST["name"], $_POST["email"], $_POST["username"], $_POST["password"], $_POST["contact"], $_POST["gender"], $_POST["marks"], $_POST["comment"]);
    $nameerr = $emailerr = $usernameerr = $passworderr = $contacterr = $gendererr = $markserr = "";
    
    if(isset($_POST['submit']))
    {
    if (empty($name)) {
        $nameerr = "Name is Required";
    } 
    else {
        echo "<br>";
        echo "Your name is :";
        echo test_input($data[0]);
    }
    if (empty($email)) {
        $emailerr = "Email is Required";
    } else {
        echo "<br>";
        echo "Your email is :";
        echo  test_input($data[1]);
    }
    if (empty($username)) {
        $usernameerr = "Username is Required";
    } else {
        echo "<br>";
        echo "Your username is :";
        echo  test_input($data[2]);
    }
    if (empty($password)) {
        $passworderr = "Password is Required";
    } else {
        echo "<br>";
        echo "Your password is :";
        echo   $data[3];
    }
    if (empty($contact)) {
        $contacterr = "Contact is Required";
    } else {
        echo "<br>";
        echo "Your contact is :";
        echo  test_input($data[4]);
    }
    if (empty($gender)) {
        $gendererr = "Gender is Required";
    } else {
        echo "<br>";
        echo "Your gender is $data[5]";
    }
    if (empty($marks)) {
        $markserr = "Marks are Required";
    } else {
        echo "<br>";
        echo "Your marks are :";
        echo   $data[6];
    }
}
    echo "<br>";
    echo "Your comment is : $data[7]";
    echo "<br>";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $arr = array($data);
    print_r($data);


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
    
<form method="post" action="">
    
        <label for="name">Name:</label><br><br>
        <input type="text" name="name" id="name" placeholder="Type Your name"><span><?php echo $nameerr;?></span><br><br>
        <label for="email">Email:</label><br><br>
        <input type="email" name="email" id="email" placeholder="Type Your email"><?php echo $emailerr;?><br><br>
        <label for="username">Username:</label><br><br>
        <input type="text" name="username" id="username" placeholder="Type Your username"><?php echo $usernameerr;?><br><br>
        <label for="password">Password:</label><br><br>
        <input type="password" name="password" id="password" placeholder="Type Your password"><?php echo $passworderr;?><br><br>
        <label for="contact">Contact:</label><br><br>
        <input type="text" name="contact" id="contact" placeholder="Type Your contact"><?php echo $contacterr;?><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" id="gender">Male:
        <input type="radio" name="gender" id="gender">Female:
        <input type="radio" name="gender" id="gender">Other:<?php echo $gendererr;?><br><br>
        <label for="marks">Marks:</label><br><br>
        <input type="number" name="marks" id="marks" placeholder="Type Your marks"><?php echo $markserr;?><br><br>
        <label for="comment">Comment:</label><br><br>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br>
        <button type="submit" name="submit" id="submit">Submit:</button> 
    </form>
    







</body>

</html>