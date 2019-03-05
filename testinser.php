<?php
include("connectdoctor.php");
error_reporting(0);
?>



<?php 

if($_GET['submit'])
{
    $name=$_GET['name'];
    $email=$_GET['email'];
    
    

    if($name!="" && $email!="" ) 
    {
        $sql ="INSERT INTO patients values('$name','$email')";
        
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


