<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "soicau";
$dbc = mysqli_connect($host, $username, $pass, $dbname);

//check connect database
if(!$dbc){
  trigger_error("Can't connect database" . mysqli_connect_error());
}else {
  mysqli_set_charset($dbc, "UTF-8");
}
?>
