<?php

if(isset($_GET['name'])) {
   //print_r($_GET);
   $name = htmlentities($_GET['name']);
   //echo $name;
   //echo $_GET['name'];
}
   #important function when you deal with security in php
   #content that user can submit to the server
   #it takes the power of html tags
/*
     $name = htmlentities($_GET['name']);
     echo $name;
  }
*/

   #if you don't want to send data through visible url use POST instead of GET, below */

/*  if(isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
     echo $name;
  }

  if(isset($_REQUEST['name'])) {
    print_r($_REQUEST)
    $name = htmlentities($_REQUEST['name']);
     echo $name;
  }
*/
//echo $_SERVER['QUERY_STRING'];

?>


<!-- <!DOCTYPE html>
<html>
  <head>
      <title>My Website</title>
  </head>

  <body>
    <form method="GET" action="get_post.php">
      <div>
        <lable>Name</lable> <br>
        <input type="text" name="name">
      </div>
      <div>
        <lable>Email</lable> <br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
  </body>
</html> -->

  <!DOCTYPE html>
  <html>
    <head>
        <title>My Website</title>
    </head>

    <body>
      <form method="GET" action="get_post.php">
        <div>
          <label>Name</label> <br>
          <input type="text" name="name">
        </div>
        <div>
          <label>Email</label> <br>
          <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
      </form>
      <ul>
        <li>
          <a href="get_post.php?name=Eva">EVA</a>
        </li>
        <li>
          <a href="get_post.php?name=Florian">Florian</a>
        </li>
      </ul>
      <h1><?php echo "{$name} 's Profile" ?></h1>
    </body>
    </html>
