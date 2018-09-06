  <?php require 'includes/common.php'; ?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reporting | SEN Group 6</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>

    <body>
        <?php

        require 'includes/header.php';
        // $sq="select * from items";
        // $res=$mysqlConnection->query($sq);
        ?>

       <div class="container" id="content">
       
       <a href="tel:9033477202">
            <div class="col-md-4 col-sm-8">
                <div class="card thumbnail">
                        <img src="img/call.png" alt="Call">
                            <div class="caption">
                                <div class="col-md-12 col-sm-12" style="text-align: center;">
                                Reporting by CALL
                                </div>
                                <br>
                                
                                    
                        
                        </div>
                      
                    </div>
                </div>
                </a>
                <a href="onetap.php" onclick="alert('complaint successfully registered'); window.location='onetap.php';";
">
                <div  class="col-md-4 col-sm-8">
                <div class="card thumbnail">
                        <img src="img/onetap.png" alt="One Tap">
                            <div class="caption">
                                <div class="col-md-12 col-sm-12" style="text-align: center;">
                                    One Tap Reporting
                                </div>
                                <br>
                                
   
                        
                        </div>
                      
                    </div>
                </div>
                </a>
                <a href="message2.php">
                <div class="col-md-4 col-sm-8">
                <div class="card thumbnail">
                        <img src="img/message.png" alt="Message">
                            <div class="caption">
                                <div class="col-md-12 col-sm-12" style="text-align: center;">
                                    Reporting by Message
                                </div>
                                <br>
                                
                        
                        
                        </div>
                      
                    </div>
                </div>
                </a>
                
               
        </div>
        <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>
    </body>
</html>
