<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Status | Emergency Reporting</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container">
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php';
             $user = $_SESSION['id']; 
             $select="SELECT * FROM  `complaints` WHERE  `user_id` =$user";
			 $result = $mysqlConnection->query($select);

			if ($result->num_rows > 0) {
    			?><table class="table table-condensed table-striped">
                <thead>
                <tr> 
                <th>Complain number</th>
				<th>Title</th>
				<th>Description</th>
				<th>Location_x</th>
				<th>Location_y</th>
                <th>Date and Time</th>
                <th>Status</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
    			// output data of each row
    			while($row = $result->fetch_assoc()) {
       				 ?><tr>
                      <td style="text-align:center"><?php echo $i++ ?></td>
					 <td><?php echo $row['title']  ?></td>
					 <td><?php echo $row['description']  ?></td>
					 <td><?php echo $row['location_x']  ?></td>
					 <td><?php echo $row['location_y']  ?></td>
					 <td><?php echo $row['timex']  ?></td>
					  <td><button class="btn btn-primary" href=""><?php echo $row['status']  ?></button></td>
                  	
					 </tr>
					 <?php
    			}
    			
			} else {
    			echo "You haven't Register compalint till now";
			}
			?></tbody></table>
			    
        </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>