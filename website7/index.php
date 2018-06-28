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
  //echo files_exists('test'); //it will show 1 whereis below it won't show
  //echo is_file('test');

  //check if file is writable
  //echo is_writable($file);

  //check if file is readable
  //echo is_readable($file);

  //get the file size
  //echo filesize($file);

//create a directory
//mkdir('testing');

//removes directory if empty
//rmdir('testing');

//copy file
//echo copy('file1.txt', 'file2.txt');


//rename files
//rename('file2.txt', 'myfile.txt');

//delete file
//unlink('myfile.txt');

//write from file to string
//echo file_get_contents($file);

//write a string to the file
//echo file_put_contents($file, 'Goodbye World');

//$current = file_get_contents($file);

//$current .= ' Goodbye world';

//file_put_contents($file, $current);

//open file for reading
//$handle = fopen($file,'r');
//$data = fread($handle, filesize($file));
//echo $data;

//open file for writing
// $handle = fopen('file2.txt', 'w');
// $txt = "John Doe\n";
// fwrite($handle, $txt);
// $txt = "Steve Smith\n";
// fwrite($handle, $txt);
// fclose($handle);
