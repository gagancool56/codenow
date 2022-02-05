<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/plugins/bootstrap/bootstrap.min.css') ?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css') ?>">

</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;background:linear-gradient(to right,#ffb600,#cccc)">
        <div class="card shadow-lg p-5" style="width: 25rem;">
            <div class="text-center mb-5">
                <img src="<?= base_url('assets/frontend/images/logo.png') ?>" class="text-center" height="100px" width="100px" alt="">
                <p class="display-4">Login</p>
            </div>
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary btn-block">Login</button>
                <a href="<?= base_url('register') ?>" class="btn">Don't have an account? Register!</a>
            </form>
        </div>
    </div>
</body>

</html>