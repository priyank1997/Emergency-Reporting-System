<?php require ('includes/common.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Report by Message | Emergency Reporting | SEN Group 6</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
	
    <body>
    <?php 
    include('includes/header.php');

    if(isset($_POST['submit']))
    {
      $user = $_SESSION['id'];
      $title=$_REQUEST['title'];
      $details=$_REQUEST['details'];
      $time= date("F j, Y, g:i a");
      $x=mt_rand(100000,1000000);
      $y=mt_rand(100000,1000000); 

$query = "INSERT INTO  complaints (user_id,title ,description,location_x,location_y,time,status) VALUES ($user,$title,$details,$x,$y,$time,'open')";
    mysqli_query($mysqlConnection, $query) or die(mysqli_error($mysqlConnection));
    


    }


  ?>
       <div class="container">
  <h2>One Tap complain Register</h2>
  <br>
  <form action="#" method="post">
    <div class="form-group">
      <label for="title"> Complain Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <br>
    <div class="form-group">
      <label for="details">Complain Details</label>
      <input type="text" name="details" class="form-control" id="details" placeholder="Enter details">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
  <br><br><br><br><br><br><br>
</div>
<footer>
<?php include('includes/footer.php');
?>
</footer>
</body>
</html>