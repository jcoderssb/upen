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

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
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
                            <h1 class="m-0">Butiran Permohonan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('permohonan') ?>">Permohonan</a></li>
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
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <div>
                                            Maklumat Pemohon
                                        </div>
                                    </h3>
                                </header>

                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>Nama Penuh</strong>
                                        <p class="text-muted">Mohd Kmarul Bin Ali Hazim</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>No. Kad Pengenalan</strong>
                                        <p class="text-muted">891129011234</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>Taraf Perkahwinan</strong>
                                        <p class="text-muted">Berkahwinan</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>Pekerjaan</strong>
                                        <p class="text-muted">Mekanik</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>Pendapatan Bulanan</strong>
                                        <p class="text-muted">RM 1,500.00</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="card card-success">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <div>
                                            Maklumat Pasangan
                                        </div>
                                    </h3>
                                </header>

                                <div class="card-body">
                                    <div class="form-group">
                                        <strong>Nama Penuh</strong>
                                        <p class="text-muted">Siti Sarah Binti Mohd Badrul</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>No. Kad Pengenalan</strong>
                                        <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>Pekerjaan</strong>
                                        <p class="text-muted">Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class="form-group">
                                        <strong>Pendapatan Bulanan</strong>
                                        <p class="text-muted">RM 1,500.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-info">
                                <header class="card-header">
                                    <h3 class="card-title">
                                        <div>
                                            Maklumat Tanggungan
                                        </div>
                                    </h3>
                                </header>

                                <div class="card-body">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th data-orderable="false" data-searchable="false">Bil</th>
                                                <th>Nama penuh</th>
                                                <th>No. KP @ Sijil Kelahiran</th>
                                                <th>Umur</th>
                                                <th>Hubungan Dengan Pemohon</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach (array(1) as $item => $key) : ?>
                                                <tr>
                                                    <td></td>
                                                    <td>Haikal Syahri Bin Mohd Kamarul</td>
                                                    <td>050505012222</td>
                                                    <td>12</td>
                                                    <td>Anak Kandung</td>
                                                </tr>
                                            <?php endforeach ?>

                                        </tbody>
                                    </table>
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

    <!-- datatables -->
    <script src="<?= base_url('adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>

    <script>
        let table = $("#table").DataTable({
            "paging": true,
            "pageLength": 50,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "order": [
                [1, 'asc']
            ]
        });
        table.on('order.dt search.dt', function() {
            let i = 1;

            table.cells(null, 0, {
                search: 'applied',
                order: 'applied'
            }).every(function(cell) {
                this.data(i++);
            });
        }).draw();
    </script>
</body>

</html>