<?php
//-------basic example
// $budget = 20000;
// $fees = 10000;
// if ($budget >= $fees) {
//     echo "Yes, i can take the admission!";
// } else {
//     echo "I can't afford it";
// }
// ----------evene odd checking
// $number = 22;

// if ($number % 2 == 0) {
//     echo "Even";
// } else {
//     echo "Odd";
// }
//-------- nested if else username password checking
// $username = "alok";
// $password = "1234";

// $dbusername = "alok";
// $dbpassword = "1234";

// if ($username == $dbusername) {
//     if ($password == $dbpassword) {
//         echo "<h1>You are logged in! Mr.!$username</h1>";
//     } else {
//         die("<h1>Invalid Password!</h1>");
//     }
// } else {
//     die("<h1>Invalid user!</h1>");
// }
//---------else if ladder

// $marks=200;
// if($marks>=365){
//     echo "First Division";
// }else if($marks>=265){
//     echo "Second Division";
// }
// else if($marks>=200){
//     echo "Third Division";
// }else{
//     echo "Fail";
// }
//-----------------switch case ----
// $nationality = "black color";
// switch ($nationality) {
//     case "wheat color": {
//             echo "You are an indian";
//             break;
//         }
//     case "white color": {
//             echo "You are an American";
//             break;
//         }
//     case "black color": {
//             echo "You are a nigerian";
//             break;
//         }
//     default: {
//             echo "You are an Alian";
//         }
// }
// -----------arrays
//------indexed
$rollno=array(343,434,343,34,"ajsfgj");
array_push($rollno,2342);

print_r($rollno);
echo "<br>".$rollno[0];
echo "<br>".$rollno[1];
echo "<br>".$rollno[2];
echo "<br>".$rollno[3];
echo "<br>".$rollno[4];
//------associative array




