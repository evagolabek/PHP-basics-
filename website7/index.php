<?php
  $path = 'dir0/dir1/myfile.php';
  $file = 'file1.txt';

  //return filename
  //echo basename($path);

  //return filename without ext
  //echo basename($path, '.php');

  //return the dir name from path
  //echo dirname($path);

  //check if file file exist
  //echo file_exists($file);

  //get abs path
  //echo realpath($file);

  //checks to see if file
  echo is_file($file);
