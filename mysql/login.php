<?php

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  //default username is 'root' and default password is empty
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if($connection){
    echo "We are connected";
  } else {
    die("Database connection failed");
  }

  // if($username && $password){
  //
  //   echo $username . "<br>";
  //   echo $password;
  //
  // } else {
  //
  //   echo "Please enter username and password.";
  //
  // }


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
    <form action="login.php" method="post">
      <div class="form-group">
          <label for="username">Username</label>
          <input name="username" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control">
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
  </div>
</div>

</body>
</html>
