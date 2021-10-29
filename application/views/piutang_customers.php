<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Piutang Customers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Finance/') ?>">Finance</a></li>
                        <li class="breadcrumb-item active">Piutang Customers</li>
                    </ol>
                </div>
                <?= $this->session->flashdata('msg'); ?>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Tagihan Customers</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Customers</th>
                                        <th>Kode Customers</th>
                                        <th>No PO</th>
                                        <th>Tanggal PO</th>
                                        <th>Total Tagihan</th>
                                        <th>Payment</th>
                                        <th>Sisa Payment</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($query as $row) {

                                        //   $outstanding = 0;
                                        $outstanding = $row['total_tagihan'] - $row['pembayaran'];
                                        $sisapembayaran = $outstanding + $row['pembayaran'];

                                        echo $sisapembayaran;
                                        // die;
                                    ?>
                                        <tr>
                                            <td><?= $row['nama_customers']; ?></td>
                                            <td><?= $row['kode_customers']; ?></td>
                                            <td><?= $row['no_order']; ?></td>
                                            <td><?= $row['tanggal_order']; ?></td>
                                            <td>Rp. <?= number_format($row['harga'], 0); ?></td>
                                            <td>Rp. <?= number_format($row['pembayaran'], 0); ?></td>
                                            <td>
                                                Rp. <?= number_format($sisapembayaran, 0); ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($sisapembayaran < 1) {
                                                    echo '<div class="alert alert-danger" role="alert">
                                                            Lunas!
                                                    </div>';
                                                } else {
                                                    echo '<a href="' . base_url("Insert/pembayaran/" . encrypt_url($row["no_order"])) . '" type="submit"><i class="fas fa-money-check-alt"></i></a>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Customers</th>
                                        <th>Kode Customers</th>
                                        <th>No PO</th>
                                        <th>Tanggal PO</th>
                                        <th>Total Tagihan</th>
                                        <th>Payment</th>
                                        <th>Outstanding Payment</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->