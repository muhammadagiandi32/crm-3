<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index2.html" class="nav-link">Home</a>
        </li> -->
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>Welcome/" class="brand-link">
        <!-- <img src="<?= base_url(); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <i class="fab fa-resolving ml-3 mr-3 fa-2x"></i>
        <span class="brand-text font-weight-light">Rusman Jaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <div class="form-inline mt-1">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dokument Baru
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Dokument/barang_masuk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Barang Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Dokument/cari" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Dokument/surat_jalan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Surat Jalan</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url() ?>Dokument/invoice" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kwitansi</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Finance
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Dokument/invoice" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Finance/incoming_payment" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Incoming Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Finance/piutang_customers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Piutang Customers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Dokument/invoice" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kwitansi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('/Master_item/tambah_item') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Outgoing Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('/Master_item/tambah_item') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Outstanding Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('/Master_item/tambah_item') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kas Besar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('/Master_item/tambah_item') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Limit Customers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Kasir
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('/Master_item/tambah_item') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kas Kecil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Master Item
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Master_item/list_item" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Item</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Master_item/list_stock" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('/Master_item/tambah_item') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Item</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Customers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Customers/list_customers') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Customers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Customers/tambah_customers" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Customers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Supplier
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Supplier/list_suplier') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Supplier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>Supplier/tambah_supplier" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Supplier</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Master Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Barang Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Sales Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Surat Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('Registrasi')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registrasi</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>