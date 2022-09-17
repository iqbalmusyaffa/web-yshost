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

                            <h3 class="mb-5">Sign in</h3>
                            <?php
                            if (isset($_GET['pesan'])) {
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Login Gagal</strong> <?php echo $_GET['pesan'] ?>
                                </div>
                            <?php } ?>
                            <?php
                            if (isset($_GET['berhasil'])) {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Log out berhasil</strong> <?php echo $_GET['berhasil'] ?>
                                </div>
                            <?php } ?>
                            <form action="ceklogin.php" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label">username</label>
                                    <input type="name" id="username" name="username" class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                </div>
                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                </div>
                                <hr class="my-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnlogin">Login</button>
                                <a href="signup.php" class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"> Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>