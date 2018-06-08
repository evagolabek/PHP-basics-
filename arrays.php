<?php

#ARRAYS - variables that can hold multiple values
/*
Indexed
Associative
Multi-dimensional
*/

//indexed

$people = array('Joe', 'Maria', 'Douglas');
echo $people[1];

$numbers = array(4, 7, 9);
$cars = ['bmw', 'mazda', 'porshe'];
$cars[2] = 'opel';
$cars[] = 'jaguar';
echo $cars[3];

echo count($cars);
$print_r($cars); //prints out the entire array to the screen, handy for debugging
var_dump($cars); //shows what it is, its value, key and value and data type and numbers of characters, tells you everything

//associative

$people = array('Brad' => 35, 'John' => 45);
echo $people['Brad'];//you get 35

$ids = [10 => 'Brad', 11 => 'John'];
echo $ids[10]; //you get Brad

$people['Jill'] = 44;
echo $people['Jill']; //you get 44

print_r($people); //shows array with key and its value, same as var_dump

//multi-dimensional

$cars = array(
  array('BMW', 20, 10),
  array('Mazda', 30, 15),
  array('Porshe', 10, 3),
); //e.g. number of cars total and number of cars sold

  echo $cars[1][0]; //will give us details of number 1 of the array and index 0 which is Mazda

 ?>
