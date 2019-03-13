
<?php
$conn = mysqli_connect("localhost","root","","find_doctor");
if(!$conn){
	echo "Error connection".mysqli_connect_error();
}
?>

<html>
<head>
<title>print data </title>
</head>
<body>
<table width="600" border="2" align="center">

	<tr>
	<td>name </td>
	<td>email </td>
	<td>password </td>
	<td> repeat password </td>
	<td>area </td>
	<td> gender </td>
	<td> contact no </td>
	</tr>
	<?php
	$sql="select * from patient ";
	$result= mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$name= $row['name'];
		$email = $row['email'];
		$pasword = $row['pasword'];
		$repeatpassword = $row['repeatpassword'];
		$area = $row['area'];
		$gender = $row['gender'];
		$contact = $row['contact'];
		
	?>

	<tr>
	<td><?php echo  $name ;?> </td>
	<td><?php echo  $email ;?> </td>
	<td><?php echo  $pasword ;?> </td>
	<td><?php echo  $repeatpassword ;?> </td>
	<td><?php echo  $area ;?> </td>
	<td><?php echo  $gender ; ?> </td>
	<td><?php echo  $contact ; ?> </td>
	
	</tr>
<?php 
	}
?>
</table>
</body>
</html>
