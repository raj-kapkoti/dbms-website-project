<?php

session_start();
$username="";
$errors=array();

$db=mysqli_connect('localhost','root','','users');

if(isset($_POST['submit'])){
    $name=   mysqli_real_escape_string($db,$_POST['name']);
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $phone= mysqli_real_escape_string($db,$_POST['phone']);
    $address= mysqli_real_escape_string($db,$_POST['address']);
    $dob= mysqli_real_escape_string($db,$_POST['dob']);
    $password1= mysqli_real_escape_string($db,$_POST['password1']);
    $cpassword= mysqli_real_escape_string($db,$_POST['cpassword']);
    $gender= mysqli_real_escape_string($db,$_POST['gender']);
    

if(empty($username)){array_push($errors,"username is empty");}
    if ($password1 != $cpassword){array_push($errors,"password does not match");}
    
    if(count($errors)==0){
        $password=md5($password1);
        
            mysqli_query($db,"INSERT INTO users(id,name,username,email,phone,address,dob,password,gender) values('','$name','$username','$email','$phone','$address','$dob','$password1','$gender')");
        
        
            $_SESSION['username']=$username;
    $_SESSION['success']="you are loged in";
    header('location: main_page.php');
    }
     if(!mysqli_query($db,$sql))
       {echo 'not insered';}
        else
        {echo 'inserted';}
      
}

//login=>
if(isset($_POST['login']))
{
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $password1= mysqli_real_escape_string($db,$_POST['password1']);
    
    if(count($errors)==0)
    {
        $password=md5($password1);
        $query= "SELECT * FROM users WHERE username='$username' AND password1='$password1'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1)
        {//log user
        $_SESSION ['username']= $username;
        $_SESSION ['success']= 'you are logged in';
        header('location: main_page.php');
        }
        else{
        array_push($errors, 'the username/password is wrong');
        }
    }
}


//logout=>
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login_page.php');
}
?>