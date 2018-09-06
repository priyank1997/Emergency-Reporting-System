  <?php require 'includes/common.php';
  if(isset($_REQUEST['submit'])) {

      //  echo "123";

      $email = $_POST['e-mail'];
      
      $password = md5($_POST['password']);


      // To protect MySQL injection (more detail about MySQL injection)
      $email = stripslashes($email);
      $password = stripslashes($password);
      $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

      //exit();
      $result = $mysqlConnection->query($sql);

      // Mysql_num_row is counting table row
      $count = mysqli_num_rows($result);
      // If result matched $username and $password, table row must be 1 row
     // echo "1";
      if ($count >= 1) {
          //echo "Success! $count";
          $_SESSION['email'] = $email;
          $temp = $result->fetch_object();
          $_SESSION['name'] = $temp->name;
          $_SESSION['id'] = $temp->id;
          
          ?>
          <script>
          window.location = "reporting.php";
          </script>
          <?php
          
    } else {
          ?>
          <script>
              alert('email id or Password is incorrect');
          </script>
         <?php
      }
  }
  ?>
  <!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Emergency Reporting | SEN Group 6</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php require 'includes/header.php'; ?>
     
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to report emergency</i><p>
                                <form role="form" action="" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>
    </body>
</html>