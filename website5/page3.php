<?php
  $user = ['name' => 'Eva', 'email' => 'test@test.com',
  'age' => 35];

  $user = serialize($user); //prepares the data to be stored

  //it wont take an array
  setcookie('user', $user, time() + (86400 * 30));

  $user = unserialize($_COOKIE['user']);

  //echo $user['name'];
  print_r($user);
 ?>
