<?php

include("connector.php");

?>




<?php

if($_GET['submit'])

{
    $name=$_GET['name'];
    $email=$_GET['email'];
    $pasword=$_GET['pasword'];
    $repeatpassword=$_GET['repeatpassword'];
    $area=$_GET['area'];
    $gender=$_GET['gender'];
    $contact=$_GET['contact'];
    
    if($name!="" && $email!="" && $pasword!="" && $repeatpassword!="" && $area!="" && $gender!="" && $contact!="" )
    {
        $sql="insert into patient values('$name','$email','$pasword','$repeatpassword','area','gender','contact')";
        
        $data=mysqli_query($conn,$sql);
        
        if($data)
        {
            echo "data inserted";
        }
        
        else
        {
            echo "not inserted";
        }
    }
}




?>