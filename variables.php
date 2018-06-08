<?php
echo "hello world";
print "Hello World"; //same thing but echo is faster
//single line comment
#single line comment

/*
multiline
comment
*/

#VARIABLES(same like in JS they can change, CONST can't):
/*
prefix with the $
starts with a letter or underscore
only letters, numbers, underscore, case sensitive
*/

#DATA TYPEs:
/*
strings
integers
floats
booleans
arrays
NULL
resource (not a data type)
*/


$output = "Hi there!";
echo $output;

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
echo $sum;

$string1 = "Hello";
$string2 = "World";
$greeting = $string1 .''. $string2 . '!'; //dot to concat the string, empty string for space
echo $greeting;

$greeting2 = '$string1 $string2';
echo $greeting2; // 'singles quotes' will give you exactly what you put it, it won't parse it for you, but "double quotes" would parse it

$string3 = "They're here"; // with ' in the string you can use \ backslash to escape it or " double quotes ", same if you want to use "" inside the string, espace with backslash
echo $string3;

$floats = 4.5;
$bool1 = true;

#CONST

/*use define function and uppercase to declare const then add the message,
const by default are case sensitive, if you want to make it other than that
you need to add third parameter of 'true' eg below */

define("GREETINGS", "Welcome everyone!", true);
echo greetings;










?>
