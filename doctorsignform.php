<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demosignupform</title>
    <link rel="stylesheet" href="demosignupform.css">
</head>
<body>
    
    
    <div id="box">
     <form action="demoinsert.php"  method="get">
  <div class="container">
    <h1 class="header">Sign Up</h1>
    <p class="pr">Please fill in this form to create an account.</p>
    <hr>
    
      name:   <input type="text" name="name" required><br>
   email:   <input type="text" name="email" required><br>
   pasword:   <input type="password" name="pasword" required><br>
   repeatpassword:   <input type="password" name="repeatpassword" required><br>
   area:   <input type="text" name="area" required><br>
   
      Gender:<br>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other <br>
     hospital_name:   <input type="text" name="name" required><br>
       department_name: <input type="text" name="name" required><br>
         office_hours:   <input type="text" name="name" required><br>
           payment_amount:   <input type="text" name="name" required><br>
    
     contactno:   <input type="text" name="contact" required><br>
     
     <input class="buton" type="submit" name="submit" value= "submit">
    </div>
    </form>
    
    
    
    
    
    
    
    
    
    
</body>
</html>