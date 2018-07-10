<?php

session_start();
$username="";
$error="";
 

$db=mysqli_connect('localhost','root','','users');

if(isset($_POST['signup'])){
    $name=   mysqli_real_escape_string($db,$_POST['name']);
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $phone= mysqli_real_escape_string($db,$_POST['phone']);
    $address= mysqli_real_escape_string($db,$_POST['address']);
    $dob= mysqli_real_escape_string($db,$_POST['dob']);
    $password1= mysqli_real_escape_string($db,$_POST['password1']);
    $cpassword= mysqli_real_escape_string($db,$_POST['cpassword']);
    $gender= mysqli_real_escape_string($db,$_POST['gender']);
    

    //encrypting the password
    $password1=md5($password1);
$query= "SELECT * FROM users WHERE username='$username'";
    
    $result = mysqli_query($db, $query);
        
    if(mysqli_num_rows($result)!=1)
        {
            mysqli_query($db,"INSERT INTO users(id,name,username,email,phone,address,dob,password,gender) values('','$name','$username','$email','$phone','$address','$dob','$password1','$gender')");
        
            $_SESSION['username']=$username;
    header('location: main_page.php?username=exist');
        }
    else
        header('location:resister_page.php');
      
}

//login=>
if(isset($_POST['login']))
{
    $username= mysqli_real_escape_string($db,$_POST['Login_username']);
    $password1= mysqli_real_escape_string($db,$_POST['Login_password']);
    
       $password=md5($password1);

    $query= "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    $result = mysqli_query($db, $query);
    
        if(mysqli_num_rows($result)==1)
        {//log user            
        $_SESSION ['username']= $username;
        header("location:main_page.php");
        }
        else
        {
   header('location:login_page.php?loginerror');
            }
}



//logout=>
if(isset($_GET['logout'])){
    
    session_destroy();
    unset($_SESSION['username']);
    header('location:login_page.php');
}
?>