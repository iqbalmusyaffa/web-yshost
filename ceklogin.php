<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password1 = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($konek,"select * from tb_user where username='$username' and password1='$password1'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/dashboard.php");
}else{
	header("location:login.php?pesan=username atau password salah");
}
