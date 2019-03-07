<?php
include("connection.php");

?>




<?php

if($_POST['submit'])
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pasword=$_POST['pasword'];
    $repeatpassword=$_POST['repeatpassword'];
    $area=$_POST['area'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];]
        
    if($name="" && $email="" && $pasword="" && $repeatpassword="" && $area="" && $gender="" && $contact="" &&)
        
    {
        $sql="INSERT INTO patient values('$name', '$email', '$pasword' , '$repeatpassword', '$area', '$gender', '$contact')";
        $data=mysqli_query($conn,$sql);
        
        
        if($data)
        {
            echo "you are now registered member";
        }
        
        else
        {
            echo "connection failed";
        }
    }
}


?>