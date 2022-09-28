<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<header class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengurusan Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
                </ol>
            </div>
        </div>
    </div>
</header>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <section class="card">
                    <header class="card-header">
                        <div>
                            <h3 class="card-title">
                                Senarai Pengguna
                            </h3>
                        </div>
                    </header>
                    <div class="card-body">

                        <section class="card card-primary card-tabs">
                            <!-- button tabs -->
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="senaraiPemohon_tab" data-toggle="pill" href="#senaraiPemohon" role="tab" aria-controls="senaraiPemohon" aria-selected="true">Pemohon</a>
                                    </li>
                                    <!-- tab senarai tuntutan (sah) -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="senaraiPegawai_tab" data-toggle="pill" href="#senaraiPegawai" role="tab" aria-controls="senaraiPegawai" aria-selected="true">Pegawai</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- senarai tuntutan (baru) -->
                                    <div class="tab-pane fade show active" id="senaraiPemohon" role="tabpanel" aria-labelledby="senaraiPemohon_tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped" id="table1">
                                                <thead>
                                                    <th data-orderable="false" data-searchable="false">Bil</th>
                                                    <th>Username</th>
                                                    <th>Emel</th>
                                                    <th>Nama Penuh</th>
                                                    <th data-orderable="false" data-searchable="false"></th>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($senaraiPemohon as $pemohon) : ?>
                                                        <tr>
                                                            <td></td>
                                                            <td><?= $pemohon->username ?></td>
                                                            <td><?= $pemohon->email ?></td>
                                                            <td><?= $pemohon->fullname ?></td>
                                                            <td class="d-flex justify-content-center">
                                                                <a class="btn btn-primary btn-sm" href="<?= base_url('pengguna/' . $pemohon->id) ?>">
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

                                    <!-- senarai tuntutan (sah) -->
                                    <div class="tab-pane fade" id="senaraiPegawai" role="tabpanel" aria-labelledby="senaraiPegawai_tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped" id="table2">
                                                <thead>
                                                    <th data-orderable="false" data-searchable="false">Bil</th>
                                                    <th>Username</th>
                                                    <th>Emel</th>
                                                    <th>Nama Penuh</th>
                                                    <th>Akses</th>
                                                    <th data-orderable="false" data-searchable="false"></th>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($senaraiPegawai as $pegawai) : ?>
                                                        <tr>
                                                            <td></td>
                                                            <td><?= $pegawai->username ?></td>
                                                            <td><?= $pegawai->email ?></td>
                                                            <td><?= $pegawai->fullname ?></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <?php foreach ($pegawai->akses as $akses) : ?>
                                                                        <span class="badge badge-pill <?= $akses->classname ?>" style="margin: 0.125rem;text-transform: capitalize;"><?= $akses->nama ?></span>
                                                                    <?php endforeach ?>
                                                                </div>
                                                            </td>
                                                            <td class="d-flex justify-content-center">
                                                                <a class="btn btn-primary btn-sm" href="<?= base_url('pengguna/' . $pegawai->id) ?>">
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
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    let table1 = $("#table1").DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "order": [
            [1, 'desc']
        ]
    });
    table1.on('order.dt search.dt', function() {
        let i = 1;

        table1.cells(null, 0, {
            search: 'applied',
            order: 'applied'
        }).every(function(cell) {
            this.data(i++);
        });
    }).draw();

    let table2 = $("#table2").DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "order": [
            [1, 'desc']
        ]
    });
    table2.on('order.dt search.dt', function() {
        let i = 1;

        table2.cells(null, 0, {
            search: 'applied',
            order: 'applied'
        }).every(function(cell) {
            this.data(i++);
        });
    }).draw();

    <?php if (session()->getFlashdata('success')) : ?>
        toastr.success("<?= session()->getFlashdata('success') ?>")
        <?php unset($_SESSION['success']); ?>
    <?php endif ?>
</script>
<?= $this->endSection() ?>