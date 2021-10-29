<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold">INVOICE</h3>
                        </div>
                        <?= $this->session->flashdata('msg') ?>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO ORDER</th>
                                        <th>NAMA CUSTOMERS</th>
                                        <th>KODE ITEM</th>
                                        <th>NAMA BARANG</th>
                                        <th>JUMLAH</th>
                                        <th>HARGA</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <?php
                                // print_r($query);
                                // $result = json_decode($query, true);
                                foreach ($query as $row) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $row['no_order']; ?></td>
                                            <td><?= $row['nama_customers']; ?></td>
                                            <td><?= $row['kode_item']; ?></td>
                                            <td><?= $row['nama_barang']; ?></td>
                                            <td><?= $row['jumlah']; ?></td>
                                            <td class="text-right">Rp. <?= $row['harga']; ?></td>
                                            <td>
                                                <a href="<?= base_url('Dokument/invoice_bayar/' . $row['id_head_order']); ?>" class="btn btn-primary p-2">

                                                    <!-- <a href="<?= base_url('Dokument/invoice_bayar'); ?>" class="btn btn-primary p-2"> -->
                                                    UBAH
                                                </a>
                                                <a name="id" class="btn btn-primary" href="<?= base_url('Dokument/invoice2/') . encrypt_url($row['no_order']) ?>">Print</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                                <tfoot>
                                    <tr>
                                        <th>NO ORDER</th>
                                        <th>NAMA CUSTOMERS</th>
                                        <th>KODE ITEM</th>
                                        <th>NAMA BARANG</th>
                                        <th>JUMLAH</th>
                                        <th>HARGA</th>
                                        <th>AKSI</th>
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