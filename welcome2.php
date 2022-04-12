<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
  $contact = test_input($_POST["Contact"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "<h2>Your Input:</h2>";echo "<br>";
echo "Your name is : $name";
echo "<br>";
echo "Your email is : $email";
echo "<br>";
echo "Your contact is : $contact";
echo "<br>";
echo "Your comment is : $comment";
echo "<br>";
echo  "Your gender is : $gender";
