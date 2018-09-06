<header>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Emergency Reporting | SEN Group 6</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "status.php"><span class = "glyphicon glyphicon-list"></span> Status</a></li>
                    <li><a href = "map.php"><span class = "glyphicon glyphicon-map-marker"></span> Heat Map</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>

                    <?php
                    } else {
                        ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>
                                Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
                                Login</a></li>
                        <?php
                    }
                    ?>
                 </ul>
            </div>
        </div>
    </div>

</header>