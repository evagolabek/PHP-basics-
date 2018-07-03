<?php

require('config/db.php');

//Create Query
$query = 'SELECT * FROM tablepost';

//Get Result
$result = mysqli_query($conn, $query);

//Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC); //assoc of array: ['name' => 'Brand']
var_dump($posts);
//free the result
mysqli_free_result($result);

//close the connection
mysqli_close($conn);
