<?php
include 'koneksi.php';
if (isset($_POST['btnsignup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password1 = md5($_POST['password1']);
    $password2 = md5($_POST['password2']);

    $q = mysqli_query($konek, "SELECT * FROM tb_user WHERE username='$username'");
    $cek = mysqli_num_rows($q);

    if ($cek == 0) {
        $simpan = mysqli_query($konek, "INSERT INTO tb_user (email, username, password1, password2) 
		values('$email','$username','$password1','$password2')");
        if ($simpan) {
            $alert = "<div class='alert alert-success'>username berhasil ditambahkan</div>";
            header("refresh:5;url=login.php");
        }
    } else {
        $alert = "<div class='alert alert-warning'>username sudah digunakan</div>";
        header("refresh:5;url=signup.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="vh-25" style="background-color: #508bfc;">
        <div class="container py-5 h-25">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-left">
                            <h3 class="mb-5">Register</h3>
                            <form action="" method="post">
                                <?php
                                echo @$alert
                                ?>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" id="email" name="email" class=" form-control form-control-lg required" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Username</label>
                                    <input type="name" id="username" name="username" class=" form-control form-control-lg required" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" id="password1" name="password1" class=" form-control form-control-lg required" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Konfimarsi Password</label>
                                    <input type="password" id="password2" name="password2" class=" form-control form-control-lg " />
                                </div>
                                <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit" name="btnsignup"> Sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</html>