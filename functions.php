<?php
#FUNCTIONS - block of code that can be repeatedly called
//Camel Case - myFunction() //most of the time in PHP for variable and functions are the two top
//Lower Case - my_function()
//Pascal Case - MyFunction() //usually used for classes

//create simple function
function simpleFunction() {
  echo 'Hello World';
}

//run simple function
simpleFunction();


//function with param
function sayHello($name = 'World') {
  echo "Hello $name<br>";
}

//calling the functions
sayHello('Eva');
sayHello('Florian');
sayHello(); //when user dont give parameter then you can set a deafult ('World' above) so you don't get error
//but if user gives a parameter that will override 'World'


//return value
function addNumbers($num1, $num2) {
  return $num1 + $num2;
}

echo addNumbers(2,4);

//passing arguments by reference

$myNum = 10;

function addFive($num) {
   $num += 5;   //+= is shorter way of writing $num = $num + 5
}

//pass in by reference (&) when the number runs throught both of below functions but only one will manipulate the number (&) 
function addTen(&$num) {
  $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
