<?php 
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "coffeehouse";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("connection failed". mysqli_connect_error());
}
?>
