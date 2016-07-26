<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])){

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

<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>

<div class="container">
  <div class="col-sm-6">

    <form action="login_update.php" method="post">
      <div class="form-group">
          <label for="username">Username</label>
          <input name="username" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control">
      </div>

      <div class="form-group">
        <select name="id" id="">
          <?php

            showAllData();

           ?>

        </select>
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
    </form>


  </div>
</div>

</body>
</html>
