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
             $user_id = $_SESSION['id']; 
             $query = "SELECT compalints.id AS id, complaints.description AS description, complaints.location_x AS complaints.langitude, complaints.location_y AS longitude, user_complaint.user_id as user FROM user_complaint JOIN complaints ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='open'";
                        $result2 = mysqli_query($mysqlConnection, $query)or die($mysqli_error($mysqlConnection));
                        
          ?>
        
            <h4> <a href="index.php"><?php echo $_SESSION['name']; ?></a> > Status</h4>
            <div class="row decor_bg">
            <!--This is almost similar to products.php file-->

            
                <div class="col-md-12">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;

                        // $query = "SELECT items.price AS Price, items.id, items.name AS Name, users_items.quantity as Quantity FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($mysqlConnection, $query)or die($mysqli_error($mysqlConnection));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>id
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . $row["Name"] . "</td><td>Rs " . $row["id"] . "</td>
                                    <td>".$row["description"]."</td><td></td></tr>";
                                }
                                $id = rtrim($id, ", ");                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "No Complaints Reported !";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </body>
        <?php include("includes/footer.php"); ?>
    </body>
</html>