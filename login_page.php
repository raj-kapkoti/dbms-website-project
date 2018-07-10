<!-- this is code for login page-->


<?php include('server.php');?>



<html>
 <head>
   <link rel="stylesheet" href= stylecss.css> 
     <title> login page </title>
 </head>

  <body>
  
        <h3><big><b style="position:fixed;" >
            <font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></b> </big>  </h3>  

    <br><br><br><br>

  <center>
    <table border="0" cellpadding="1">
       <tr>
         <td colspan="3" align="center">

            <img class="circle" src="dp.JPG" width="100" height="100" alt="dp image"><br><br>
             <font size="5"><b><font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></b></font>

  <form method="post" action="server.php"><br><br>
          <div style=" opacity:0.9; background-color:white"; width=40px;>
 USERNAME :
 <input type="text" name="Login_username" placeholder="enter username" required minlength="3" maxlength="20"></div><br>

          <div style=" opacity:0.9; background-color:white"; width=40px;>
 PASSWORD :
              <input type="password" name="Login_password" placeholder="enter password" required minlength="3" maxlength="20"></div>
      
     <!_error massage_>
     <?php
      $url= "$_SERVER[REQUEST_URI]";
      if(strpos($url,"loginerror")== true){
          echo '<p style="color:red;font-size:12;font-style:italic; background-color:white;opacity:0.7">*the username or password is wrong</p>';
      }
      ?> 
     

<tr><td  colspan="3" align="center" bgcolor="#349ed3">
 <input type="submit" name="login" id="signup_button" value="Log In">
    </td></tr>
       </form></td></tr>
  
  <tr><td><font color="white">. </font> </td></tr>
        <tr><td align="right" ><hr width="100"></td><td align="center"><font color="white"><b>OR</b></font></td> <td align="left" ><hr width="100"></td></tr>
  <tr><td><font color="white">. </font></td></tr>

        <tr>
<td align="center" colspan="3">
    
 <a href="resister_page.php"><button   class="btncolor">Create new account</button></a>
            </td></tr>
      </table>
  </center>

<p class="bottom">
 <font size="1">
    all rights reserved by RAJ.
  </font>
</p>
     
</body>
</html>