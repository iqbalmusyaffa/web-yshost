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




<?php
if (isset($_POST["btnsimpan"])) {
    $file = upload_file();
    $methodbyr = $_POST['methodbyr'];
    $nmrrekening = $_POST['nmrrekening'];
    $atas_nama = $_POST['atas_nama'];
    $tglbuat = date("Y-m-d");
    $query = "INSERT INTO bayar ('','$file','$methodbyr','$nmrrekening','$atas_nama','$tglbuat')";
    mysqli_query($konek, $query);
    if ($query) {
        echo "<script>alert('Data berhasil dimasukan '); document.location.href = 'bayar.php';</script>";
    } else {
        echo "<script>alert('Data gagal dimasukan ');</script>";
    }
    function upload_file()
    {
        $namafile = $_FILES['file']['name'];
        $ukuranfile = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
        $tmpName = $_FILES['file']['tmp_name'];

        $ekstensifileValid = ['jpg', 'jpeg', 'png'];
        $ekstensifile = explode('.', $namafile);
        $ekstensifile = strtolower(end($ekstensifile));

        if (!in_array($ekstensifile, $ekstensifileValid)) {
            echo "<script>alert('Format Tidak Valid ');document.location.href = 'bayar.php';</script>";
            die();
        }
        if ($ukuranfile > 2048000) {
            echo "<script>alert('Ukuran file Lebih dari 2mb');document.location.href = 'bayar.php';</script>";
            die();
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensifile;

        move_uploaded_file($tmpName, 'assets/images/' . $namafilebaru);
        return $namafilebaru;
    }
}
?>
