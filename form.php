<!-- SuperGlobal Variable -->
<?php

if(isset($_POST['submit'])) {

  $names = array("Edwin", "Colin", "Peter", "Samid",
   "Mohad", "Maria", "Jane", "Tom");
  $minimum = 2;
  $maximum = 15;

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(strlen($username) <= $minimum){
    echo "Username is too short. Must be longer than ". $minimum . " characters.";
  }
  if(strlen($username) >= $maximum){
    echo "Username is too long. Must be shorter than ". $maximum . " characters.";
  }

  if(!in_array($username, $names)){
    echo "User does not exist.";
  } else {
    echo "Welcome";
  }
}

 ?>

<!Doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>

<form action ="form.php" method="post">

  <input type="text" name="username" placeholder="Username">
  <br>
  <input type="password" name="password" placeholder="Password">
  <br>
  <input type="submit" name="submit">

</form>


</body>
</html>
