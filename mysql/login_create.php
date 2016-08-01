<?php include "db.php";?>
<?php include "functions.php";?>

<?php createRows(); ?>

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
    <h1 class="text-center">Create</h1>
    <form action="login_create.php" method="post">
      <div class="form-group">
          <label for="username">Username</label>
          <input name="username" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control">
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
    </form>
  </div>
</div>

</body>
</html>
