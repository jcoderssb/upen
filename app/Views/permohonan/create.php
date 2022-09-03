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
                            <table id="table" class="table table-bordered table-striped order-list">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Nama penuh</th>
                                        <th>No. KP/Sijil Kelahiran</th>
                                        <th>Umur</th>
                                        <th>Hubungan Dengan Pemohon</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td class="text-center">
                                            <button type="button" id="addrow" class="btn btn-sm btn-success">Tambah</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <input type="hidden" id="totalTanggungan" name="total_tanggungan" />
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    $(document).ready(function() {
        var counter = 0;

        $("#addrow").on("click", function() {
            counter = $('#table tr').length - 2;

            var newRow = $("<tr>");
            var cols = "";

            bil = counter + 1;

            cols += '<td>' + bil + '</td>';
            cols += '<td><input type="text" class="form-control" placeholder="Nama penuh" name="nama_tanggungan' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" placeholder="kad pengenalan/sijil kelahiran" name="nokp_tanggungan' + counter + '"/></td>';
            cols += '<td><input type="text" class="form-control" placeholder="Umur" name="umur_tanggungan' + counter + '"/></td>';
            cols += '<td><select name ="hubungan_tanggungan' + counter + '" class="form-control"><option value="" selected disabled>Hubungan</option><option value="anak">Anak Kandung</option><option value="penjaga">Penjaga</option></select></td>';
            cols += '<td class="text-center"><button type="button" class="ibtnDel btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>';
            newRow.append(cols);
            $("table.order-list").append(newRow);
            counter++;

            document.getElementById("totalTanggungan").value = counter;
        });


        $("table.order-list").on("click", ".ibtnDel", function(event) {
            $(this).closest("tr").remove();

            counter -= 1
            $('#addrow').attr('disabled', false).prop('value', "Add Row");
        });


    });
</script>
<?= $this->endSection() ?>