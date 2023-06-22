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
            <div class="row">
                <div class="col-12">
                    <div class="card mb-2" style="max-width: 540px;">
                        <div class="row g-0 justify-content-center">
                            <div class="col-md-12">
                                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="img-fluid rounded-start" alt="Wild Landscape" />
                            </div>

                            <div class="col-md-8">
                                <div class="card-body text-center">
                                    <h4 class="card-title ">Lupa Password</h4>
                                    <p class="card-text">
                                        Kami akan mengirim instruksi untuk mengganti password. Silakan masukkan email :
                                    </p>
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
                                    <form action="<?= base_url('ForgotPassword') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control" />
                                            <label class="form-label" for="registerEmail">Email</label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">Kirim</button>
                                        <a class="btn btn-outline-primary btn-block mb-4" href="<?= route_to('/') ?>">Kembali</a>
                                    </form>
                                </div>
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