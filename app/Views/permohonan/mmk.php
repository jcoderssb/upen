<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<header class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Status MMK</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Status MMK</li>
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
                                Senarai Status MMK
                            </h3>
                            <div>
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
                                        <th>Status MMK</th>
                                        <th>Dihantar Pada</th>
                                        <th>Status Keputusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($senaraiPermohonan as $permohonan) : ?>
                                        <tr>
                                            <td><?= $permohonan['id'] ?></td>
                                            <td><?= $permohonan['nokp_pemohon'] ?></td>
                                            <td><?= $permohonan['nama_pemohon'] ?></td>
                                            <td>
                                                <?php if ($permohonan['status'] == 0) : ?>
                                                    <span class="badge badge-success">Layak MMK</span>
												<?php elseif ($permohonan['status'] == 1) : ?>
													<span class="badge badge-success">Berjaya</span>
												<?php elseif ($permohonan['status'] == 2) : ?>
												<span class="badge badge-success">Tidak Berjaya</span>
												<?php endif ?>
                                            </td>
                                            <td><?= date('d/m/Y', $permohonan['created_at']) ?></td>
                                            <td class="d-flex justify-content-center">
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-modal">
                                                    Tindakan
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
					
					<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="text-center bg-info p-3">
									<h4 class="modal-title text-white" id="info-header-modalLabel">Status Keputusan MMK</h4>
								</div>
								<div class="modal-body">
									<form id="edit-form" class="pl-3 pr-3">
										<div class="row">
											<input type="hidden" id="id" name="id" class="form-control"  maxlength="11" value="">
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="module"> No Rujukan Permohonan: </label>
													<input type="text" id="module" name="module" class="form-control" maxlength="255" value="" >
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="dateDue"> Tarikh Mesyuarat: </label>
													<input type="date" id="dateDue" name="dateDue" class="form-control" dateISO="true" value="">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="task_status"> Status Keputusan: </label>
													<select id="task_status" name="task_status" class="custom-select" >
														<option value="0">Layak MMK</option>
														<option value="1">Berjaya</option>
														<option value="2">Tidak Berjaya</option>
													</select>
												</div>
											</div>
										</div>
										<!--div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="task_status"> Status Kutipan: </label>
													<select id="task_status" name="task_status" class="custom-select" >
														<option value="4">Belum Dibayar</option>
														<option value="1">Telah Dibayar</option>
														<option value="2">Dalam Proses</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="dateDue"> Tarikh Akhir Bayaran: </label>
													<input type="date" id="dateDue" name="dateDue" class="form-control" dateISO="true" value="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="assigned_to"> Penutupan: </label>
													<select id="assigned_to" name="assigned_to" class="custom-select" >
														<option value="4">Belum Dibayar</option>
														<option value="1">Telah Dibayar</option>
														<option value="2">Dalam Proses</option>
													</select>
												</div>
											</div>
										</div-->
															
										<div class="form-group text-center">
											<div class="btn-group">
												<button type="submit" class="btn btn-success" id="edit-form-btn">Kemaskini</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
											</div>
										</div>
									</form>

								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->	
					
	
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