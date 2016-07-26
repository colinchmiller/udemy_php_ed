<?php include "db.php"; ?>

<?php

//pulling the information from the database
function showAllData(){

  //must make sure that connection is global to work outside the function
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query FAILED '. mysqli_error());
  }

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";

  }
}
 ?>

 <?php
function updateTable(){
  global $connection;
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];

 //concatenated query - easier to spot mistakes
   $query = "UPDATE users SET ";
   $query .= "username = '$username', ";
   $query .= "password = '$password' ";
   $query .= "WHERE id = $id ";

   $result = mysqli_query($connection, $query);

   if(!$result){
     die("QUERY FAILED" . mysqli_error($connection));
   }
 }

  ?>
