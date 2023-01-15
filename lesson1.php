<?php
echo "<h1>Hello world</h1>";
echo "<h1>\"Hello world\"</h1>";
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>haha</p>
    <div></div>
    <h1>HEHE heehee hoohoo googoo</h1>
</body>
</html> -->

<?php
//echo "<!DOCTYPE html>";
//echo "<htmo>";    
/* More syntax:
    Most of pHP is case-insensitive
    Variables *are* case sensitive

    Variables in PHP:
    -names must start with a $
    -names can include numbers letter and underscores, but cannot start with a nummber
    -data type of a variable can be changes

    $week5
    $_wee5
    not &5thweek - not valid
*/

$Today = 'Tuesday';
echo 'Today is ' . $Today; // dot is concatinate in php

$course = 'COMP4515';
echo "<br>and the course is $course<br>";
// NOTE: PHP treasts single and double quotes separately,
// double quotes can keep value inside
// single quote keeps everything as literally inside

/* 
Data types in PHP 
integer 5
float 5.0
string "", ''
boolean true/false

*/
echo 'var_dump($course): ';
var_dump($course); // automatically echos
echo "aaaaa<br>";
print_r($course); // automatically echos
echo "<br>";
gettype($course); // prints the data type
echo "<br>";
echo is_string($course); // true returns 1
echo "<br>";
echo is_int($course);// returns nothing

//nto create a constant, use define() with two args:
//the name of the constant, and the value
define('PI', 3.14);
echo "<br>";
echo PI;

// php.net/manual
$output = `ls -l`;
// datas functions
//hhost a php 
    ?>