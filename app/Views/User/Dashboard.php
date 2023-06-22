<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/mdb/css/mdb.min.css">
    <link rel="stylesheet" href="assets/mdb/css/mdb.min.css.map">
</head>

<body class="bg-info">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15" alt="MDB Logo" loading="lazy" />
                </a>
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#"><?=  session()->get('nama')?> </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= base_url('Logout') ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container-md mt-5">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Periksa Entrian Form</strong>
                </hr />
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

        <div class="card">
            <h3 class="card-header">Data Users</h3>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($users as $item) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/uploads/<?= $item['photo'] ?>" alt="" style="width: 45px; height: 55px" class="rounded-circle" />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1"><?= $item['nama'] ?></p>
                                            <p class="text-muted mb-0"><?= $item['email'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1"><?= $item['username'] ?></p>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>

    </div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/mdb/js/mdb.min.js"></script>
</body>

</html>