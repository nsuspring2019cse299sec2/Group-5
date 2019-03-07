<?php 

include("connecttodatabase.php");

?>




<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pasword=$_POST['pasword'];
    $sql="select * from patient where name='$name' && pasword='$pasword'";
    $data= mysqli_query($con,$sql);
    $total=mysqli_num_rows($data);
   echo $total; 
}



?>


