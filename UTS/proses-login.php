<?php
 $email    = $_POST['email'];
 $pass = $_POST['password'];

 $user = ['name' => 'Wahyu Safrizal', 'email' => 'wahyusafrizal174@gmail.com', 'password' => 'password'];

 if($email == $user['email']){
   if($pass == $user['password']){
      session_start();
      $_SESSION['status_login']= 'success';
      $_SESSION['user_email']= $user;
      header("location:index.php");
   }else{
      session_start();
      $_SESSION['status_login']= 'failed';
      $_SESSION['error_message']= 'Password tidak sesuai';
      header("location:login.php");
   }
 }else{
    session_start();
    $_SESSION['status_login']= 'failed';
    $_SESSION['error_message']= 'Email tidak ditemukan';
    header("location:login.php");
 }

 

?>