<!-- this is code for login page-->
<?php include('server.php'); ?>
<html>
 <head>
   <link rel="stylesheet" href= stylecss.css> 
     <title> login page </title>
 </head>

  <body>
  
        <h3><b>
            <font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></b>   </h3>  

    <br><br><br><br>

  <center>
    <table border="0" cellpadding="1">
       <tr>
         <td colspan="3" align="center">

            <img class="circle" src="dp.JPG" width="100" height="100" alt="dp image"><br><br>
			<font size="5"><b><font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></font></b>

  <form method="post" action="main_page.php"><br><br>
          <div style=" opacity:0.9; background-color:white"; width=40px;>
 USERNAME :
 <input type="text" name="username" placeholder="enter username" required minlength="3" maxlength="20"></div><br>

          <div style=" opacity:0.9; background-color:white"; width=40px;>
 PASSWORD :
              <input type="password" name="password" placeholder="enter password" required minlength="3" maxlength="20"></div>

<tr><td  colspan="3" align="center" bgcolor="#349ed3">
 <input type="submit" name="submit" id="signup_button" value="Log In"></td></tr>
       </form></td></tr>
  
  <tr><td><font color="white">. </font> </td></tr>
        <tr><td align="right" ><hr width="100"></td><td align="center"><font color="white"><b>OR</b></font></td> <td align="left" ><hr width="100"></td></tr>
  <tr><td><font color="white">. </font></td></tr>
<tr>
<td align="center" colspan="3">
 <a href="resister_page.php"><button   class="btncolor">Create new account</button></a>
        </tr></td>
      </table>
  </center>

<p class="bottom">
 <font size="1">
    all rights reserved by RAJ.
  </font>
</p>
      
</body>
</html>