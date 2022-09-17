<?php
if(isset($_POST['btnlogin'])){
    $email=$_POST['email'];
    $password1=$_POST['password'];

    if($email=="admin@gmail.com"){
        if($password1=="admin"){
            // login valid
            header('location:admin/dashboard.php');
        }else{
            // password salah
            header('location:login.php?pesan=password salah');
        }
        }else{
        // username salah
        header('location:login.php?pesan=username salah');
    }
}
