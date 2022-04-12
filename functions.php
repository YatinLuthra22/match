<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
  echo "<br>";
}

familyName("Jani");
echo "<br>";
familyName("Hege");
echo "<br>";
familyName("Stale");
echo "<br>";
familyName("Kai Jim");
echo "<br>";
familyName("Borge");
echo "<br>";
echo "<br>";
function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
    echo "<br>";
  }
  
  familyName1("Hege", "1975");
  familyName1("Stale", "1978");
  familyName1("Kai Jim", "1983");

  function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo "<br>";
  echo addNumbers(5, 5);  echo "<br>";
  function setHeight(int $minheight=50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

  function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4)."<br>";

  function addNumbers2(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers2(1.2, 5.21);
  echo "<br>";
  function addNumbers3(float $a, float $b) : int {
    return ($a + $b);
  }
  echo addNumbers3(1.2, 5.2);
  echo "<br>";  
  //Passing Arguments by re
  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
  
  
