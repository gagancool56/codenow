<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/bootstrap/bootstrap.min.css') ?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css') ?>">

</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center signup-container" style="height: 100vh;background:linear-gradient(to right,#ffb600,#cccc)">
        <div class="card shadow-lg p-5" style="width: 50rem;">
            <div class="text-center mb-5">
                <img src="<?= base_url('assets/frontend/images/logo.png') ?>" class="text-center" height="100px" width="100px" alt="">
                <p class="display-4">Create an Account</p>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block">Register</button>
                <a href="<?= base_url('login') ?>" class="btn">Already have an account? Login!</a>
            </form>
        </div>
    </div>
</body>

</html>