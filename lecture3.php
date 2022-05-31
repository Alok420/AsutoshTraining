<?php
//  https://www.php.net/manual/en/language.operators.increment.php
error_reporting(2);
$a = 23;
$b = "23";
echo "<br>< " . ($a < $b);
echo "<br>> " . ($a > $b);
echo "<br><= " . ($a <= $b);
echo "<br>>= " . ($a >= $b);
echo "<br>!= " . ($a != $b);
echo "<br>== " . ($a == $b);
echo "<br>=== " . ($a === $b);
echo "<br>";
//for checking error reporting function
echo "<br>+ " . $a + $b;
// ------------error handling operator
// include("file.php");
// (@include("file.php"))
// OR die("Could not find file.php!");
echo "<br>";
// --------execution operator
echo "execution operator";
$output = `ls -al`;
echo "<pre>$output</pre>";
// --------unary operator
echo "unary operator";
$a1=5;
echo "<br>";
echo $a1++;
echo "<br>";
echo ++$a1;
echo "<br>";
echo $a1--;
echo "<br>";
echo --$a1;
$a1+=6; 
echo $a1;


