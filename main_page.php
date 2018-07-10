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
     
 </head> 
    
    <body>
        <font size="6"><b><font color="white">FACT</font><span style="color:skyblue; font-style:italic">DEC</span></b><font style="color:green;font-family:cursive;">.com</font></font>
        <div class="rtext">A place for thoughts...</div>
       
        
        
<center>
<div id="navbar" class="dropbar">
<table style="border-radius:10px; " border="0x" bgcolor="#191a44" >
<tr>
<td width="200px" align="center" bgcolor="#191a44">

<div class="dropdown">
    <button class="dropbtn"><a href="https://www.wikipedia.org/"><b>WIKIPEDIA</b></a></button>
</div></td>

<td width="400px" align="center">
<div class="dropdown">
    <button class="dropbtn"><b>BOOKS</b></button>
  <div class="dropdown-content">
      <a href="https://www.futureofeverything.io/future-books/">FUTURE OF BOOKS</a>
    <a href="http://www.bbc.com/culture/story/20160822-the-mysterious-ancient-origins-of-the-book">ORIGIN</a>
  </div>
</div></td>
<td width="200px" align="center">
<div class="dropdown">
    <button class="dropbtn"><b>PROFILE</b></button>
  <div class="dropdown-content">
      <a href="profile_page.php"><b>TIME LINE</b></a>
     <form method="get" action="server.php"><input  style="background_color:transparent;" type="submit" name="logout" value="LOGOUT"></form>
     
    </div>
</div></td>

<td width="200px" align="center">
<div class="dropdown">
    <button class="dropbtn"><b>HELP</b></button>
  <div class="dropdown-content">
    <a href="terms.html">TERMS AND CONDITIONS</a>
	<a href="about.html">ABOUT</a>
  </div>
</div></td>

</tr></table>

</div>
<br>

<br><br>
    
    


  <div class=left><div id="left">
<div style="height:60; font-family:cursive; opacity:1; background-color:darkgrey; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);">
  Explore!
  <form method="get" action="https://en.wikipedia.org/w/index.php">
  <input type="text" name="search" placeholder="wiki search">  <input type="submit" value="search">
</form>
    </div><br>
      <font style="font-family:cursive;font-size:18;">
“In many of the more relaxed civilizations on the Outer Eastern Rim of the Galaxy, the Hitch-Hiker's Guide has already supplanted the great Encyclopaedia Galactica as the standard repository of all knowledge and wisdom, for though it has many omissions and contains much that is apocryphal, or at least wildly inaccurate, it scores over the older, more pedestrian work in two important respects. First, it is slightly cheaper; and secondly it has the words DON'T PANIC inscribed in large friendly letters on its cover.” 
― Douglas Adams, The Hitchhiker's Guide to the Galaxy.</font>
</div>
 </div>
    
    <div class=rightbox>
      <h3>ARTICLES</h3>
    </div>
   
        </center>
    
    
    
    
 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky1 = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky1) {
    navbar.classList.add("sticky1")
  } else {
    navbar.classList.remove("sticky1");
  }
} 
</script> 
    
    
    
    </body>

</html>