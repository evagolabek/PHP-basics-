<?php
#CONDITIONALS

/*
==
===
<
>
<=
>=
!= not equal to
!== not identical
*/

//basic if else elseif

$num = 2;

if($num == 5){
  echo '5 passed';
}
else if($num == 6){
  echo '6 passed';
}
else {
  echo 'did not pass';
}


#NESTING IF STATMENT

$num = 6;

if($num>4) {
  if($num<10){
    echo '$num passed';
  }
  else {
    echo 'whatever!';
  }
}

#LOGICAL OPERATORS
/*
and && (both have to be true)
or || (one of them has to be true)
exclusive or xor (one of them have to be true but not both)
*/

$num = 5;

if($num > 4 && $num < 10) {
  echo '$num passed';
}

#SWITCHES test for value/different cases

$favColour = 'red';

switch($favColour) {
  case 'red':
    echo 'Your favourite colour is red';
    break;
  case 'blue':
    echo 'Your favourite colour is blue';
    break;
  case 'green':
    echo 'Your favourite colour is green';
    break;
  default:
    echo 'Your favourite colour is something else';
}


 ?>
