  <?php require 'includes/common.php'; ?>
    
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Emergency Reporting | SEN Group 6</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'includes/header.php'; ?>
<?php
        if(isset($_REQUEST['submit']))
        {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['e-mail'];
        $password=md5($_REQUEST['password']);
        $contact=($_REQUEST['contact']);
        $tcontact=($_REQUEST['tcontact']);
        $sq="INSERT INTO users (name,email,password,contact,tcontact) values ('$name','$email','$password','$contact','$tcontact')";
        $res = $mysqlConnection->query($sq);
        ?>
        <script>
           window.location = "login.php";
       </script>
        <?php
        }
        ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="contact" class="form-control" placeholder="contact" name="contact" required>
                            </div>
                            <div class="form-group">
                                <input type="tcontact" class="form-control" placeholder="Trusted Contact" name="tcontact" required>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>
    </body>
</html>