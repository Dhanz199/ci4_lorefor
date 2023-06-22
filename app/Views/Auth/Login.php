<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/mdb/css/mdb.min.css">
    <link rel="stylesheet" href="assets/mdb/css/mdb.min.css.map">
</head>

<body class="bg-primary" style="font-size: 14px; font-family: 'Montserrat', sans-serif;">
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="card p-4" style="width: 25rem;">
                        <img src="assets/img/LOGOIPSUM.png" class="card-img-top">
                        <hr>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty(session()->getFlashdata('message'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('message'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">

                            <form action="<?= base_url('/') ?>" method="post">
                                <?= csrf_field(); ?>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control" />
                                    <label class="form-label" for="loginName">Email or username</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control" />
                                    <label class="form-label" for="loginPassword">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                            </form>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Belum punya akun? <a href="<?= route_to('Register') ?>">Daftarkan Dirimu</a></p>
                            </div>

                            <div class="text-center">
                                <a href="<?= route_to('ForgotPassword') ?>">Lupa password?</a>
                            </div>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/mdb/js/mdb.min.js"></script>

</body>

</html>