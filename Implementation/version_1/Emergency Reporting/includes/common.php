<?php

$server   = "localhost";
$database = "ER2";
$usernm = "root";
$passwrd = "123";

$mysqlConnection = new mysqli($server, $usernm, $passwrd,$database);
session_start();



/*
$server   = "localhost";
$database = "store";
$username = "root";
$password = "123";

$mysqlConnection = mysql_connect($server, $username, $password);
echo "ok";
if (!$mysqlConnection)
{
  echo "Please try later.";
}
else
{
	echo "ok";
mysql_select_db($database, $mysqlConnection);

}
$selected = mysql_select_db("store",$mysqlConnection)
  or die("Could not select examples");
echo "ok";

$result = mysql_query("SELECT * FROM items");
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'id'}." Name:".$row{'name'}."
   ".$row{'price'}."<br>";
}
*/
?>
