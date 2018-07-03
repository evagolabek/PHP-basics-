<?php

require('config/db.php');

//Create Query
$query = 'SELECT * FROM tablepost';

//Get Result
$result = mysqli_query($conn, $query);

//Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC); //assoc of array: ['name' => 'Brand']
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
    <h1>Posts</h1>
      <?php foreach ($posts as $post) : ?>
        <div class="well">
          <h3><?php echo $post['title']; ?></h3>
          <small>Created on<?php echo $post['created_at']; ?>
          by <?php echo $post['author']; ?></small>
          <p><?php echo $post['body']; ?></p>
        </div>
      <?php endforeach; ?>
  </div>
  </body>
</html>
