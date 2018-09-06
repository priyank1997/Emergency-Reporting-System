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

    if(isset($_REQUEST['submit']))
    {
      $user_id = $_SESSION['id'];
      $title= (string)($_REQUEST['title']);
      $description = (string)($_REQUEST['description']);
      $timex= (string)(date("F j, Y, g:i a"));
      $loc_x= (isset($_GET['lat']))?$_GET['lat']:'';
      $loc_y= (isset($_GET['long']))?$_GET['long']:'';
      //$loc_y= (string)(mt_rand(100,100)); 
  echo $_GET['lat'];
  echo $_GET['long'];
  
    $query = "INSERT INTO complaints (user_id,title, description, location_x, location_y, timex, status) VALUES($user_id,'$title', '$description' ,'$loc_x','$loc_y','$timex', 'Open')";
    mysqli_query($mysqlConnection, $query) or die(mysqli_error($mysqlConnection));
    


    }


  ?>
       <div class="container">
  <h2>Report Complaint by Message</h2>
  <br>
  <form action="" method="post">
    <div class="form-group">
      <label for="title"> Complain Title</label>
      <input type="title" class="form-control" id="title" placeholder="Enter title" name="title" required>
    </div>
    
    <div class="form-group">
    <label for="description">Complain Details</label>
    <textarea class="form-control" type="description " name="description" id="description" placeholder="Enter details" rows="3" required></textarea>
  </div>
    <div class="form-group">
      <label for="description"></label>
      
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