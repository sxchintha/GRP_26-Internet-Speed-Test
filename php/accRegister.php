<?php
    include_once 'config.php';
    session_start();

     $regUsername = $_POST['regUsername'];
     $regEmail = $_POST['regEmail'];
     $regPass = $_POST['regPass'];

     $duplicate_1 = mysqli_query($con,"select * from user_accounts where user_email='$regEmail' ");
     $duplicate_2 = mysqli_query($con,"select * from user_accounts where user_name='$regUsername' ");

     if(mysqli_num_rows($duplicate_1)>0)
     {
        $_SESSION['signupError']="The EMAIL you entered is already taken !";
        header("location: login.php");
     }
     elseif(mysqli_num_rows($duplicate_2)>0)
     {
        $_SESSION['signupError']="The USERNAME you entered is already taken !";
        header("location: login.php");
     }
     else
     {
         //insert data

         $sql= "insert into user_accounts(user_name,user_email,user_pass) values('$regUsername','$regEmail','$regPass')"; 

         if(mysqli_query($con,$sql))
         {
            $_SESSION['signupError']="User succesfully registered !";
            header("location: login.php");
         }

         else
         {
            $_SESSION['signupError']="User registration failed !";
            header("location: login.php");
         }
     }

     mysqli_close($con); 

?>