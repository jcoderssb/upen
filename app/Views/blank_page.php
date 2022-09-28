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

                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<?= $this->endSection() ?>