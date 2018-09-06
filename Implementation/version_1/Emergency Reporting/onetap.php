<?php

require("includes/common.php");

   
    $user_id = $_SESSION['id'];
    echo $user_id;
			$time= (string)(date("F j, Y, g:i a"));
			$x= (string)mt_rand(100000,1000000);
			$y= (string)mt_rand(100000,1000000); 
			
    $query = "INSERT INTO complaints(user_id,title, description, location_x, location_y, timex, status) VALUES($user_id,'One-Tap-Urgent','One-Tap-Urgent',$x,$y,'$time', 'Open')";
    mysqli_query($mysqlConnection, $query) or die(mysqli_error($mysqlConnection));
    
    
    header('location: reporting.php');
	echo "s";
	
?>
<!-- 

$str = "cart-add.php?id=".($i+1);

<a href="<?php echo $str ?>" class="btn btn-primary">Add to cart</a>

 -->   