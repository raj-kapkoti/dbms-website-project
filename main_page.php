<!-- this is code for main page-->
<?php include('server.php'); 

if (empty($_SESSION['username'])){
header('location:login.php');
}
?>
<html>
 <head>
     <link rel="stylesheet" href= stylecss.css> 
     <title> main page </title>
     
      <div style="height:50; margin-top:-8;  " class="top_bar">
       <p>
           <img src="Phone_icon.jpg" alt="Smiley face" width="40" height="40" align="middle" style="margin:0px 5px">+919779558973
           <img src="location_icon.jpg"  width="40" height="40" align="middle" style="margin:0px 10px">
           <a href=https://www.google.co.in/maps/place/Chandigarh/@30.7350626,76.6934887,12z/data=!3m1!4b1!4m5!3m4!1s0x390fed0be66ec96b:0xa5ff67f9527319fe!8m2!3d30.7333148!4d76.7794179 >chandigarh</a>
           
          <img src="Mail_icon.JPG"  width="40" height="40" align="middle" style="margin:0px 10px">factd
        <img src="Login_icon.JPG" width="40" height="40" align="right" style="margin:0px 0px" ></p>
          
     </div>   
 </head> 
    <body>
         <div style="margin-left:-10 ; margin-top:5 ;  opacity:0.8;background-color:white;width:103% ;height:50; padding:1px">
        <h3><b>
            <big>Welcome to <b><font color="red">FACT</font><span style="color:skyblue; opacity:1;font-style:italic">DEC</span></b></big><font size="0.5"color="white"></font><div class="rtext">A place for thoughts...</div>
        </b></h3></div>

    <marquee>
       <font color=white size="1">
           This page is written and designed By RAJ KAPKOTI, CLASS: cse-23,UID:17BCS2977. Resemblance to any other project is just a coincidence or maybe the other person copied me. Whatever the reason be i am not the one who cheated.
       </font>
    </marquee><hr>
<br>
        
        
<center><table><tr><td>
<div class="d_position">
<table style="border-radius:10px;" border="0px" bgcolor="black" >
<tr>
<td width="200px" align="center" bgcolor="black">

<div class="dropdown">
  <button class="dropbtn"><a href="https://www.wikipedia.org/">WIKIPEDIA</a></button>
</div></td>

<td width="400px" align="center">
<div class="dropdown">
  <button class="dropbtn">BOOKS</button>
  <div class="dropdown-content">
    <a href="https://www.futureofeverything.io/future-books/">FUTURE OF BOOKS</a>
    <a href="http://www.bbc.com/culture/story/20160822-the-mysterious-ancient-origins-of-the-book">ORIGIN</a>
  </div>
</div></td>
<td width="200px" align="center">
<div class="dropdown">
  <button class="dropbtn">PROFILE</button>
  <div class="dropdown-content">
    <a href="profile_page.html">MY INFO</a>
    <a href="login_page.php">LOGOUT</a>
     
    </div>
</div></td>

<td width="200px" align="center">
<div class="dropdown">
  <button class="dropbtn">HELP</button>
  <div class="dropdown-content">
    <a href="terms.html">TERMS AND CONDITIONS</a>
	<a href="about.html">ABOUT</a>
  </div>
</div></td>

</tr></table>

</div>
<br>

<br><br>


  <div class=left>
<div style="height:60; opacity:1; background-color:darkgrey;">
  <u>wikipedia search</u><br>
  <form method="get" action="https://en.wikipedia.org/w/index.php">
  <input type="text" name="search" placeholder="wiki search">  <input type="submit" value="search">
</form>
    </div><br>
      
“In many of the more relaxed civilizations on the Outer Eastern Rim of the Galaxy, the Hitch-Hiker's Guide has already supplanted the great Encyclopaedia Galactica as the standard repository of all knowledge and wisdom, for though it has many omissions and contains much that is apocryphal, or at least wildly inaccurate, it scores over the older, more pedestrian work in two important respects. First, it is slightly cheaper; and secondly it has the words DON'T PANIC inscribed in large friendly letters on its cover.” 
― Douglas Adams, The Hitchhiker's Guide to the Galaxy.

 </div>
  
    
  
  
  
 </td></tr></table></center> <hr>  </body>
</html>