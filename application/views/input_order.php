<link rel="stylesheet"
    href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                // echo form_open('Insert/insert_input_order');
                                foreach ($query->result_array() as $result) {


                                ?>
                                <div class="form-group fieldGroup">
                                    <div class="input-group">
                                        <input type="text" class="form-control col-sm-6"
                                            placeholder="<?= $result['nama_customers']; ?>" readonly>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="customers[]" class="form-control col-sm-6"
                                            placeholder="<?= $result['kode_customers']; ?>"
                                            value="<?= $result['kode_customers']; ?>" readonly>
                                        <input type="text" id="kode_item" name="kode_item[]" class="form-control"
                                            placeholder="Kode Item">
                                        <input type="text" id="nama_barang" name="nama_barang[]" class="form-control"
                                            placeholder="Nama Barang" autofocus>
                                        <input type="text" id="qty" name="jumlah[]" class="form-control"
                                            placeholder="Jumlah">
                                        <!-- <select name="unit[]" id="">
                                                <option value="KG">KG</option>
                                                <option value="DUS">DUS</option>
                                                <option value="PCS">PCS</option>
                                            </select> -->
                                        <input type="text" id="harga" name="harga[]" class="form-control"
                                            placeholder="Harga">
                                        <div class="input-group-addon ml-3">
                                            <a href="javascript:void(0)" class="btn btn-success addMore"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open('Insert/insert_input_order'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Orders</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode Item</th>
                                        <th>Nama Item</th>
                                        <th>QTY</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
                <div id="inputarr">
                    <!-- <input type="text" value="" name="kode_item2[]"> -->
                    <input type="hidden" name="customers[]" class="form-control col-sm-6"
                        placeholder="<?= $result['kode_customers']; ?>" value="<?= $result['kode_customers']; ?>">

                </div>
                <input type="submit" name="submit[]" class="btn btn-primary btn-sm" value="Submit" />
                <?php echo form_close() ?>
                <?php } ?>

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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- JS AJAX -->