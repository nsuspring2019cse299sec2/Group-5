













<?php
$conn = mysqli_connect("localhost","root","","find_doctor");
if(!$conn){
	echo "Error connection".mysqli_connect_error();
}
?>

<html>
<head>
<title>print data </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: #2196F3;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  outline: none;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}
</style>
</head>
<body>




<button class="btn">Button</button>
<div class="dropdown">
  <button class="btn" style="border-left:1px solid #0d8bf2">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="#">Cardiology</a>
    <a href="#">Neurology</a>
    <a href="#">Nefrology</a>
  </div>
</div>





















<table width="600" border="2" align="center">

	<tr>
	<td>name </td>
	<td>email </td>
	<td>password </td>
	<td> repeat password </td>
	<td>area </td>
	<td> gender </td>
	<td> hospital_name </td>
	<td> department_name </td>
	<td> contact no </td>
	<td> office_hours </td>
	<td> payment </td>
	</tr>
	<?php
	$sql="select * from doctor where area='dania' and department_name='nefrology' ";
	$result= mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$name= $row['name'];
		$email = $row['email'];
		$pasword = $row['pasword'];
		$repeatpassword = $row['repeatpassword'];
		$area = $row['area'];
		$gender = $row['gender'];
		$hospital_name = $row['hospital_name'];
		$department_name = $row['department_name'];
		$contact = $row['contact'];
		$office_hours = $row['office_hours'];
		$payment = $row['payment'];
		
	?>

	<tr>
	<td><?php echo  $name ;?> </td>
	<td><?php echo  $email ;?> </td>
	<td><?php echo  $pasword ;?> </td>
	<td><?php echo  $repeatpassword ;?> </td>
	<td><?php echo  $area ;?> </td>
	<td><?php echo  $gender ; ?> </td>
	<td><?php echo  $hospital_name ; ?> </td>
	<td><?php echo  $department_name ; ?> </td>
	<td><?php echo  $contact ; ?> </td>
	<td><?php echo  $office_hours ; ?> </td>
	<td><?php echo  $payment ; ?> </td>
	</tr>
<?php 
	}
?>
</table>
</body>
</html>
