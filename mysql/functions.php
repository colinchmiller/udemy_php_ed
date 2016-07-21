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
