<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
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
                    <li class="breadcrumb-item active"><?= $permohonan['id'] ?></li>
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
                            <p class="text-muted"><?= $permohonan['nama_pemohon'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>No. Kad Pengenalan</strong>
                            <p class="text-muted"><?= $permohonan['nokp_pemohon'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>Taraf Perkahwinan</strong>
                            <p class="text-muted"><?= $permohonan['taraf_perkahwinan'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>Pekerjaan</strong>
                            <p class="text-muted"><?= $permohonan['pekerjaan_pemohon'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>Pendapatan Bulanan</strong>
                            <p class="text-muted">RM <?= $permohonan['pendapatan_pemohon'] ?></p>
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
                            <p class="text-muted"><?= (empty($permohonan['nama_pasangan'])) ? '-' : $permohonan['nama_pasangan'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>No. Kad Pengenalan</strong>
                            <p class="text-muted"><?= (empty($permohonan['nokp_pasangan'])) ? '-' : $permohonan['nokp_pasangan'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>Pekerjaan</strong>
                            <p class="text-muted"><?= (empty($permohonan['pekerjaan_pasangan'])) ? '-' : $permohonan['pekerjaan_pasangan'] ?></p>
                        </div>
                        <div class="form-group">
                            <strong>Pendapatan Bulanan</strong>
                            <p class="text-muted"><?= (empty($permohonan['pendapatan_pasangan'])) ? '-' : 'RM ' . $permohonan['pendapatan_pasangan'] ?></p>
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
                                    <th>No. KP/Sijil Kelahiran</th>
                                    <th>Umur</th>
                                    <th>Hubungan Dengan Pemohon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($senaraiTanggungan as $tanggungan) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $tanggungan['nama'] ?></td>
                                        <td><?= $tanggungan['nokp'] ?></td>
                                        <td><?= $tanggungan['umur'] ?></td>
                                        <td><?= $tanggungan['hubungan'] ?></td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
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
<?= $this->endSection() ?>