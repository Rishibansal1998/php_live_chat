<?php
ini_set("display_errors","on");
if(!isset($conn)){
 session_start();
 date_default_timezone_set("UTC"); // Set Time Zone
 $host = "localhost"; // Hostname
 $port = "3306"; // MySQL Port : Default : 3306
 $user = "root"; // Username Here
 $pass = ""; //Password Here
 $db   = "chat"; // Database Name
 $conn  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);
 
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>
