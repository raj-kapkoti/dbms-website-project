<!-- this is code for resistration page-->
<?php include('server.php');?>
<html>
 <head>
   <link rel="stylesheet" href= stylecss.css> 
     <title> profile page </title>
      <a href="main_page.php"><b> <button style="position : fixed; z-index: 4;">HOME</button> </b></a>
 </head>
    
  <body>
      <img style="margin-top:-10; margin-left: -10;box-shadow: 0px 16px 32px 10px rgba(0,0,0,0.5);" height="25%" width="103%" src="cover.jpg">
      
      
      <table align="center" style="margin-left:5%; margin-right: 5%; " border="0"><tr><td style="width: 1500">
        
          
      <br><br><br>
      <table style="margin-top:-110px;  margin-left:8% ">
        <tr><td align="center">
            <img class="circle" src="dp.JPG" width="110" height="110" alt="dp image"><br><br>
            <font size="5"><b><font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></b></font>
           </td></tr>
          <b> <tr style="opacity:0.8; background-color:white"><td>USER NAME </td><td><?php echo $_SESSION['username'];?>  </td></tr>
          <tr style="opacity:0.8; background-color:white"><td>NAME </td><td>name</td></tr>
          <tr style="opacity:0.8; background-color:white"><td>EMAIL </td><td>email</td></tr>
          <tr style="opacity:0.8; background-color:white"><td>AGE </td><td>age</td></tr>
          <tr style="opacity:0.8; background-color:white"><td>GENDER </td><td>gender</td></tr>
          </b></table>
    <br><br>
          
          <div style=" background-color:white;opacity:0.9; text-align: center;  "> <br><b><font size="5">     MOST RECENT EXPLORATIONS:</font></b>
          <br><br>
              
         <iframe style="margin-left: 26;margin-top:15;  " src="https://en.wikipedia.org/wiki/Dogs" style="background-color:white; " ></iframe>
          <iframe style="margin-left: 26;margin-top:15;  " src="https://en.wikipedia.org/wiki/Dogs" style="background-color:white; " ></iframe>
          <iframe style="margin-left: 26;margin-top:15;  " src="https://en.wikipedia.org/wiki/Dogs" style="background-color:white; " ></iframe>
          <iframe style="margin-left: 26;margin-top:15;  " src="https://en.wikipedia.org/wiki/Dogs" style="background-color:white; " ></iframe>
          <iframe style="margin-left: 26;margin-top:15;  " src="https://en.wikipedia.org/wiki/Dogs" style="background-color:white; " ></iframe>
          <iframe style="margin-left: 26;margin-top:15;  " src="https://en.wikipedia.org/wiki/Dogs" style="background-color:white; " ></iframe>
          </div>
          
    </td></tr></table>
    </body>
</html>
             
