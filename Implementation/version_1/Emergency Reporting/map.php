<?php 
require ("includes/common.php"); ?>
<html>
<head>
 
    <title>Heat Map</title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwYyYBF_LZ40KQH8nbZVSbNht_EZmmcRs"></script>
    <script type="text/javascript" src="js/map.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="InitMap();">
<?php 
    include ("includes/header.php");
    ?>
<h3>Heat Map</h3>
    <div id="map" style="height: 500px; width: auto;">
    </div>
    <?php 
    include ('includes/footer.php');
    ?>
</body>
</html>