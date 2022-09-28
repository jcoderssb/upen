<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<header class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengurusan Jejak Audit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Jejak Audit</li>
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
                                Jejak Audit
                            </h3>
                        </div>
                    </header>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="table1">
                                <thead>
                                    <th data-orderable="false" data-searchable="false">Bil</th>
                                    <th>Nama Aktiviti</th>
                                    <th>Tarikh & Masa</th>
                                    <th>Email</th>
                                    <th>Peranan</th>
                                    <th>IP Address</th>
                                    <th>Status </th>
                                    <th data-orderable="false" data-searchable="false"></th>
                                </thead>
                                <tbody>
                                    <?php foreach ($senaraiJejakAudit as $jejakAudit) : ?>
                                        <tr>
                                            <td></td>
                                            <td><?= $jejakAudit->nama_aktiviti ?></td>
                                            <td><?= date('d/m/Y h:i:s A', $jejakAudit->tarikh_masa)  ?></td>
                                            <td><?= $jejakAudit->email ?></td>
                                            <td><?= $jejakAudit->user_type ?></td>
                                            <td><?= $jejakAudit->ip_address ?></td>
                                            <td>
                                                <?php if ($jejakAudit->status == 0) : ?>
                                                    <h5><span class="badge badge-danger" style="text-transform: capitalize;">failed</span></h5>
                                                <?php else : ?>
                                                    <h5><span class="badge badge-success" style="text-transform: capitalize;">success</span></h5>
                                                <?php endif ?>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Padam
                                                </button>
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
</script>
<?= $this->endSection() ?>