<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="find_doctor";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $Pasword=$_POST['psw'];
    $repaet_password=$_POST['psw-repeat'];
    $area=$_POST['area'];
    $hospital_name=$_POST['hospital name'];
    $department_name=$_POST['department name'];
    $contact_no=$_POST['contactno'];
    $office_hours=$_POST['office hours'];
    $payment=$_POST['payment'];
    

    $sql="INSER INTO doctor values (id,name,email,Pasword,repaet_password,area,hospial_name,department_name,contact_no,office_hours,payment)";
    
    $res=mysqli_query($conn,$sql);

    if($res)
    {
        echo "you are now registered";
    }
else
{
    echo "please try again";
}



?>