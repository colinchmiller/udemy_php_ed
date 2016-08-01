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

function createRows(){

  if(isset($_POST['submit'])){

   global $connection;
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "INSERT INTO users(username,password) ";
   $query .= "VALUES ('$username', '$password')";

   $result = mysqli_query($connection, $query);

   //checking if the query was successful
   if($result) {
     echo "Record Created";
   }else{
     die('Query FAILED '. mysqli_error());
   }

  }
}
?>

 <?php
function updateTable(){

  if(isset($_POST['submit'])){
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

     if($result) {
       echo "Record Updated";
     }else{
       die('Query FAILED '. mysqli_error());
     }
   }
 }

  ?>


  <?php
 function deleteRows(){
   if(isset($_POST['submit'])){
     global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

    //concatenated query - easier to spot mistakes
      $query = "DELETE from users ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);

      if($result) {
        echo "Record Deleted";
      }else{
        die('Query FAILED '. mysqli_error());
      }
    }
}

   ?>
