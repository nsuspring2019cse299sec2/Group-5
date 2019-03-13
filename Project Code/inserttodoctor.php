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
    $hospital_name=$_GET['hospital_name'];
    $department_name=$_GET['department_name'];
    $contact=$_GET['contact'];
    $office_hours=$_GET['office_hours'];
    $payment=$_GET['payment'];
    
    
    if($name!="" && $email!="" && $pasword!="" && $repeatpassword!="" && $area!="" && $gender!="" && $hospital_name!="" && $department_name!="" && $contact!="" && $office_hours!="" && $payment!="" )
    {
        $sql="insert into doctor values('$name','$email','$pasword','$repeatpassword','$area','$gender' ,'$hospital_name', '$department_name','$contact' ,'$office_hours','$payment')";
        
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