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

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
                                <li class="breadcrumb-item active">daftar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>

            <!-- content page -->
            <form action="<?= base_url('permohonan') ?>" method="post">
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
                                            <label>Nama Penuh</label>
                                            <input type="text" class="form-control" name="nama_pemohon" placeholder="Masukkan nama penuh pemohon">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Kad Pengenalan</label>
                                            <input type="text" class="form-control" name="nokp_pemohon" placeholder="Masukkan kad pengenalan pemohon">
                                        </div>
                                        <div class="form-group">
                                            <label>Taraf Perkahwinan</label>
                                            <select name="taraf_perkahwinan" class="form-control">
                                                <option value="" selected disabled>Pilih taraf perkahwinan</option>
                                                <option value="bujang">Bujang</option>
                                                <option value="berkahwin">Berkahwinan</option>
                                                <option value="janda/duda">Janda/Duda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan_pemohon" placeholder="Masukkan pekerjaan pemohon">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendapatan Bulanan (RM)</label>
                                            <input type="text" class="form-control" name="pendapatan_pemohon" placeholder="Masukkan pendapatan bulanan pemohon">
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
                                            <label>Nama Penuh</label>
                                            <input type="text" class="form-control" name="nama_pasangan" placeholder="Masukkan nama penuh pasangan">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Kad Pengenalan</label>
                                            <input type="text" class="form-control" name="nokp_pasangan" placeholder="Masukkan kad pengenalaan pasangan">
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan_pasangan" placeholder="Masukkan pekerjaan pasangan">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendapatan Bulanan</label>
                                            <input type="text" class="form-control" name="pendapatan_pasangan" placeholder="Masukkan pendapatan pasangan">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12" x-data="{total_tanggungan: ''}">
                                <div class="card card-info">
                                    <header class="card-header">
                                        <h3 class="card-title">
                                            <div>
                                                Maklumat Tanggungan
                                            </div>
                                        </h3>
                                    </header>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Bil Tanggungan</label>
                                            <div class="d-flex">
                                                <input type="number" min="1" max="10" class="form-control col-1" name="bil_tanggungan" placeholder="Bil" x-model="total_tanggungan" readonly>
                                                <button type="button" class="btn btn-sm btn-danger ml-1" @click="(total_tanggungan > 1)? total_tanggungan-- : total_tanggungan = ''"><i class="fa fa-minus"></i></button>
                                                <button type="button" class="btn btn-sm btn-success ml-1" @click="total_tanggungan++"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Senarai Tanggungan</label>
                                            <table id="table" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Bil</th>
                                                        <th>Nama penuh</th>
                                                        <th>No. KP/Sijil Kelahiran</th>
                                                        <th>Umur</th>
                                                        <th>Hubungan Dengan Pemohon</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr hidden>
                                                        <td x-text="total_tanggungan"></td>
                                                    </tr>
                                                    <template x-for="i in parseInt(total_tanggungan)">
                                                        <tr>
                                                            <td x-text="i"></td>
                                                            <td>
                                                                <input type="text" class="form-control" placeholder="Nama penuh">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" placeholder="kad pengenalan/sijil kelahiran">
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" placeholder="Umur">
                                                            </td>
                                                            <td>
                                                                <select name="hubungan" class="form-control">
                                                                    <option value="" selected disabled>Hubungan dengan pemohon</option>
                                                                    <option value="anak">Anak Kandung</option>
                                                                    <option value="penjaga">Penjaga</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </template>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-end">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
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
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
</body>

</html>