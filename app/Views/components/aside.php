<?php
$uri = service('uri');
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('adminlte/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">UPEN</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= session()->get("username") ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $uri->getSegment(1) === 'dashboard' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= $uri->getSegment(1) === 'permohonan' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $uri->getSegment(1) === 'permohonan' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Permohonan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('permohonan') ?>" class="nav-link <?= uri_string() === 'permohonan' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Senarai Permohonan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('permohonan/daftar') ?>" class="nav-link <?= uri_string() === 'permohonan/daftar' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Permohonan</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="<?= base_url('permohonan/mmk') ?>" class="nav-link <?= uri_string() === 'permohonan/mmk' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Senarai Status MMK</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Kutipan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('kutipan') ?>" class="nav-link <?= uri_string() === 'kutipan' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Senarai Kutipan</p>
                            </a>
                        </li>
						 <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pemulangan Deposit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cetakan Resit</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Perakaunan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Senarai Perakaunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://teyadashawty.bukku.my/dashboard" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modul Perakaunan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Pentadbir
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Senarai Pentadbir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Pentadbir</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>