  <?php require 'includes/common.php'; 
  
                    if (isset($_SESSION['email'])) {
                    
                    		header("Location: reporting.php");
  
                    } else {
                    
						header("Location: login.php");
  
                    }
                    ?>