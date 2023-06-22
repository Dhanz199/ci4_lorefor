<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

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
                                    <h4 class="card-title ">Reset Password</h4>
                                    <p class="card-text">
                                        Silahkan Ganti Password Baru Anda :
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

                                    <form action="<?= base_url('UpdatePassword') ?>" method="post">

                                        <input type="hidden" name="token" value="<?= $token ?>">

                                        <label for="password">Password Baru:</label>
                                        <input type="password" name="password" id="password" class="form-control" required><br><br>

                                        <input type="submit" value="Reset" class="btn btn-primary btn-block">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</body>

</html>