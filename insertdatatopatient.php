<?php
include("connectdoctor.php");
error_reporting(0);
?>



<?php 

if($_POST['submit'])
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['psw'];
    $repeatpassword=$_POST['psw-repeat'];
    $area=$_POST['area'];
    $gender=$_POST['gender'];
    
    $contact=$_POST['contactno'];
    

    if($name!="" && $email!="" && $password!="" && $repeat password!="" && $area!="" && $gender!=""   && $contact!="") 
    {
        $sql ="insert into doctor values('$name','$email','$password','$repeatpassword','$area','$gender', '$contact')";
        
        $res=mysqli_query($conn,$sql);
        
        if($res)
        {
            echo "you are registered now";
        }
    }
    else
    {
        echo "all fields are required";
    }
}





?>