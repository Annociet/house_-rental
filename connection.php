<?php
// create connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "house_rental_db";

$conn = mysqli_connect('localhost', 'root', '', 'house_rental_db');
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
?>