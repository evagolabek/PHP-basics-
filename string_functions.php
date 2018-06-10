<?php

  #substr() - returns a portion of a string
  $output = substr('Hello', 1);
    echo $output; //prints out elllo it substracted 1 letter

  $output2 = substr('Hello', -2);
    echo  $output2; //ptints lo (negative two positions)-starts from the back


  #strlen() - returns string length
  $output3 = strlen('Hello World');
    echo $output; //prints 11, counts letter and space


  #strpos() - finds the position of the first occurance of a sub string
  $output4 = strpos('Hello World', 'o');
    echo $output4; //prints out 4 (position of the o)


  #strrpos() - finds the position of the last occurance of a sub string
  $output5 = strrpos('Hello World', 'o');
    echo $output5; //prints out 7 (last occcurance of the o)


  #trim() - strips white space
  $text = 'Hello World           ';
  var_dump($text); //give us length including spaces

  $trimmed = trim($text);
  var_dump($trimmed); //trims the spaces, in case someone put spaces in the form


  #strtoupper-makes everything uppercase
  $output6 = strtoupper('Hello World');
    echo $output6;


  #strtolower-makes everything uppercase
  $output7 = strtolower('Hello World');
    echo $output7;


  #ucwords() -capitalize every word
  $output8 = ucwords('hello world');
    echo $output8;


  #str_replace() -replace all occurances of a search string with a replacement
  $text = 'Hello World';
  $output9 = str_replace('World', 'Everyone', $text);
    echo $output9;

  #is_string() - check if is_string
  $val = 'Hello';
  $output10 = is_string($val);

  echo $output;

  $value = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

  foreach($value as $value) {
    if(is_string($value)) {
      echo "{$value} is string <br>";
    }
  }

  #gzcompress() - compresses a string
  $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
  ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
  in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
  officia deserunt mollit anim id est laborum.";

  $compressed = gzcompress($string);
    echo $compressed;

  $original = gzuncompress($compressed);
    echo $original;


 ?>
