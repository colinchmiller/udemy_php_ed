<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php updateTable();?>


<?php include "includes/header.php"; ?>

<div class="container">
  <div class="col-sm-6">

    <h1 class="text-center">Update</h1>
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

<?php include "includes/footer.php"; ?>
