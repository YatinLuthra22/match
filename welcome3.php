<?php
// define variables and set to empty values
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
 //$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    echo $nameErr;echo "<br>";
} else {
    $name = test_input($_POST["name"]);
    echo "Your username is : $name";echo "<br>";
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
     echo $emailErr;echo "<br>";
} else {
    $email = test_input($_POST["email"]);
    echo "Your email is : $email";echo "<br>";
}

  if (empty($_POST["Contact"])) {
    $contact = "Your Contact is Requried";
    echo $contact;echo "<br>";
  } else {
    $contact = test_input($_POST["Contact"]);
    echo "Your contact is : $contact";echo "<br>";
  }

  if (empty($_POST["comment"])) {
    $comment = "Comment is empty";
    echo $comment;echo "<br>";
  } else {
    $comment = test_input($_POST["comment"]);
    echo "Your comment is : $comment";echo "<br>";
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    echo $genderErr;
  } else {
    $gender = test_input($_POST["gender"]);echo "<br>";
    echo "Your gender is : $gender";echo "<br>";
  }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>