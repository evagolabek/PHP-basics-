<?php

require('config/config.php');
require('config/db.php');

//get id
$id = mysqli_real_escape_string($conn, $_GET['id']); //espace any dangerous characters

//Create Query
$query = 'SELECT * FROM posts WHERE id= '.$id;

//Get Result
$result = mysqli_query($conn, $query);

//Fetch data
$post = mysqli_fetch_assoc($result);
//var_dump($posts); //prints the assoc of array

//free the result
mysqli_free_result($result);

//close the connection
mysqli_close($conn);

?>


<!DOCTYPE html>
  <html>
    <head>
      <title>PHP Blog</title>
      <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    </head>
  <body>
    <div class="container">
          <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
          <h1><?php echo $post['title']; ?></h1>
          <small>Created on<?php echo $post['created_at']; ?>
          by <?php echo $post['author']; ?></small>
          <p><?php echo $post['body']; ?></p>
    </div>
  </body>
</html>
