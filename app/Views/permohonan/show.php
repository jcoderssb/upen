<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPEN</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css') ?>">
</head>

<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed" style="height: auto;">
    <div class="wrapper">

        <?= $this->include('components/preloader') ?>
        <?= $this->include('components/nav') ?>
        <?= $this->include('components/aside') ?>

        <div class="content-wrapper" style="min-height: 640px;">

            <!-- header page -->
            <header class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Butiran Permohonan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Permohonan</li>
                                <li class="breadcrumb-item active">20220901P001</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <!-- content page -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <div>
                                            Senarai Permohonan
                                        </div>
                                    </h3>
                                </header>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Pemohonan</label>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, accusamus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?= $this->include('components/footer') ?>
    </div>

    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>