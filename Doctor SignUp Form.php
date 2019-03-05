<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Sign Up Form </title>
    <link rel="stylesheet" href="Docotrsignupformstyle.css">
</head>
<body>
 <div id="box">
     <form action="connectdoctor.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label for="area"><b>Area</b></label>  
    <input type="text" placeholder="Enter Area name" name="area" required>
    
    <label for="hospital"><b>Hospital Name</b></label>
    <input type="text" placeholder="Enter Hospital Name" name="hospital name" required>
     
      <label for="department"><b>Department Name</b></label>
    <input type="text" placeholder="Enter Department Name" name="department name" required>
     
      <label for="contact no"><b>Contact No</b></label>
    <input type="text" placeholder="Enter Contact No" name="contactno" required>
     
      <label for="office Hours"><b>Office Hours</b></label>
    <input type="text" placeholder="Enter Offie Hours" name="office hours" required>
     
      <label for="payment"><b>Payment</b></label>
    <input type="text" placeholder="Enter payment" name="payment required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
 </div>
 
  
   
</body>
</html>
