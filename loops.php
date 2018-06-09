<?php
#LOOPS execute code sets number of times

/*
for
while
do..while
foreach
*/

#FOR loops
# @params  - initializer, condition, inc

//basic FOR loop that prints out number 1 - 9 concat with string and printed each on different line
for($i = 0; $i < 10; $i++) {
echo 'Number '.$i;
echo '<br>';
}

#WHILE loop
# @params - condition (setting a variable happens outside of the loop)

//WHILE loop which does exactly same thing as the above FOR loops
//while loop is used over the for loop if you don't know the set number/condition

$i = 0;

while ($i < 10) {
  echo 'Another Number '.$i;
  echo '<br>';
  $i++;
}

#DO...WHILE loop
# @params - condition

$i = 0;
do {
  echo 'And One More '.$i;
  echo '<br>';
  $i++;
}

while($i < 10);


#FOR EACH loops -works with arrays

#normal array

$people = array('Joe', 'Andy', 'Chris');

foreach($people as $person) {
echo $person;
echo '<br>';
}

#associative array (key-value pairs)

$people = array('Joe' => 'joe@gmail.com', 'Andy' => 'andy@gmail.com', 'Chris' => 'chris@gmail.com');

foreach($people as $person => $email) {
echo $person. ':' .$email;
echo '<br>';
}


 ?>
