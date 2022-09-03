<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>

<?= $this->section('js') ?>
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

    <?php if (session()->getFlashdata('success')) : ?>
        toastr.success("<?= session()->getFlashdata('success') ?>")
        <?php unset($_SESSION['success']); ?>
    <?php endif ?>
</script>
<?= $this->endSection() ?>