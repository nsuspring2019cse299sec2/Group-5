<?php

$con=mysqli_connect("localhost","root","","find_doctor");
if(!$con)
{
    echo ("Error connection:".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $username=$_POST['name'];
    $password=$_POST['pasword'];
    
    $sql="select * from Patient where name='$username' and pasword='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    
    if($count==1)
    {
        echo "Login success";
    }
    else
    {
        echo "login failed";
    }
}

?>