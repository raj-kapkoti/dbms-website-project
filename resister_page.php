<!-- this is code for resistration page-->
<?php include('server.php'); ?>

<html>
 <head>
   <link rel="stylesheet" href= stylecss.css> 
     <title> resister page </title>
 </head>
  <body>
     <div style=" opacity:0.4;background-color:skyblue;width:100% ;height:50; padding:1px">
       <center><h2>Resistration page</h2></center>
        </div><br><br><br><br>
		<center><table border="0" cellpadding="15">
		
            
            <img class="circle" src="dp.JPG" width="100" height="100" alt="dp image"><br><br>
            <font size="5"><b><font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></font></b>

            
		<tr><td width="300px" bgcolor="#1b5f72" align="center">
		
		<form method="post" action="resister_page.php">
		
            
            
            
            <div style=" opacity:1;background-color:white; padding:1px">
		Name: <input required minlength="3" maxlength="20" style="border:0" type="text" name="name"  placeholder="enter full name" ></div><br><br>
            
            <div style=" opacity:1;background-color:white; padding:1px">
		Username: <input required minlength="3" maxlength="20" style="border:0" type="text" name="username" placeholder="enter username"></div><br><br>
		
		<div style=" opacity:1;background-color:white; padding:1px">
		Email: <input required minlength="3" maxlength="50" style="border:0" type="email" name="email" placeholder=" ...@gmail.com"></div><br><br>
		
            <div style=" opacity:1;background-color:white; padding:1px">
		Phone: <input required minlength="3" maxlength="20" style="border:0" type="number" name="phone" placeholder="enter phone no."></div><br><br>
            
              <div style=" opacity:1;background-color:white; padding:1px">
                  Address: <textarea required minlength="6" maxlength="20" style="border:0" name="address" placeholder="enter address..."></textarea></div><br><br>
            
		<div style=" opacity:1;background-color:white; padding:1px">
		D.O.B  <input style="border:0" type="date" name="dob" placeholder="enter your age"></div><br><br>
		
		<div style=" opacity:0.9;background-color:white; padding:1px">
       Password: <input required minlength="6" maxlength="20" style="border:0" type="password" name="password1" placeholder="enter password"></div><br><br>
 
     <div style=" opacity:0.9;background-color:white; padding:1px">
     Confirm Password: <input required minlength="6" maxlength="20" style="border:0" type="password" name="cpassword"  placeholder="confirm password"></div><br><br>
 
      <div style=" opacity:0.9;background-color:white; padding:1px">
      Gender:<br>
      <input required checked type="radio" name="gender" value="male"> MALE
      <input type="radio" name="gender" value="female"> FEMALE
      <input type="radio" name="gender" value="other"> OTHER<br>
        </div><br>
            
            <input type="checkbox" name="terms" required checked ><b>I agree to the following <a href="terms.html">Terms and Conditions</a> and would like to join the FactDec.</b><br><br>
            
        <input type="submit" name="signup"  class="btncolor"   value="Sign up">  <input type="reset" name="reset" value="reset">   
	</form>	
	</td></tr></table>
        </center>		
		
    </body>
</html>

        