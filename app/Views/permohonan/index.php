<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPEN</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css') ?>"">
    <link rel=" stylesheet" href="<?= base_url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>"">
    <link rel=" stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css') ?>"">

    <!-- DataTables -->
    <link rel=" stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">

    <!-- toastr -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/toastr/toastr.min.css') ?>">
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed" style="height: auto;">
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
                            <h1 class="m-0">Permohonan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Permohonan</li>
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
                            <section class="card">
                                <header class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">
                                            Senarai Permohonan
                                        </h3>
                                        <div>
                                            <a href="<?= base_url('permohonan/daftar') ?>" class="btn btn-sm btn-success">
                                                <i class="fas fa-plus"></i>
                                                Daftar
                                            </a>
                                        </div>
                                    </div>
                                </header>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>No. KP</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Status Permohonan</th>
                                                    <th>Dihantar Pada</th>
                                                    <th data-orderable="false" data-searchable="false"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($senaraiPermohonan as $permohonan) : ?>
                                                    <tr>
                                                        <td><?= $permohonan['id'] ?></td>
                                                        <td><?= $permohonan['nokp_pemohon'] ?></td>
                                                        <td><?= $permohonan['nama_pemohon'] ?></td>
                                                        <td>
                                                            <?php if ($permohonan['status'] == 1) : ?>
                                                                <span class="badge badge-warning">Sedang Diproses</span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td><?= date('d/m/Y', $permohonan['created_at']) ?></td>
                                                        <td class="d-flex justify-content-center">
                                                            <a class="btn btn-primary btn-sm" href="<?= base_url('permohonan/' . $permohonan['id']) ?>">
                                                                <i class="fas fa-folder"></i>
                                                                Lihat
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?= $this->include('components/footer') ?>
    </div>

    <!-- adminlte -->
    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/dist/js/adminlte.min.js') ?>"></script>

    <!-- datatables -->
    <script src="<?= base_url('adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>

    <!-- toastr -->
    <script src="<?= base_url('adminlte/plugins/toastr/toastr.min.js') ?>"></script>

    <script>
        let table = $("#table").DataTable({
            "paging": true,
            "pageLength": 20,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "order": [
                [0, 'desc']
            ]
        });

        <?php if(session()->getFlashdata('success')):?>
        toastr.success("<?= session()->getFlashdata('success') ?>")
        <?php unset($_SESSION['success']); ?>
        <?php endif ?>
    </script>
</body>

</html>