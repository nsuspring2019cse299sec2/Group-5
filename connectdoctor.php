<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="find_doctor";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn)
{
    
}

else
{
    die("connection failed because ".mysqli_connect_error());
}
    




?>


