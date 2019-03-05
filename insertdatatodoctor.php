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
    $repeat password=$_POST['psw-repeat'];
    $area=$_POST['area'];
    $gender=$_POST['gender'];
    $hospitalname=$_POST['hospital name'];
    $deptname=$_POST['department name'];
    $contact=$_POST['contactno'];
    $officehours=$_POST['office hours'];
    $payment=$_POST['payment'];
    

    if($name!="" && $email!="" && $password!="" && $repeat password!="" && $area!="" && $gender!="" && $hospitalname!="" && $deptname!="" && $contact!="" && $officehours!="" && $payment!="" &&) 
    {
        $sql ="insert into patient values('$name','$email','$password','$repeat password','$area','$gender','$hospitalname',' $deptname','$contact','$officehours',' $payment')";
        
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