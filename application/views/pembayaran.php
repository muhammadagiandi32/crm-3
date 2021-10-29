<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pembayaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>">Finance</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <?php 
                    if(form_error()==false){
                        echo'<div class="card card-primary">';
                    }else{
                        echo'<div class="card card-danger">';
                    }
                    ?>
                    <div class="card-header">
                        <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="pembayaran" action="<?=base_url('Insert/pembayaran/').$id?>" method="POST">
                        <?php 
                        // print_r($query);
                            foreach($query as $row){
                            ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Order</label>
                                <input type="text" value="<?=$row['no_order']?>" name="no_order" class="form-control"
                                    readonly id="exampleInputEmail1">
                                <?php echo form_error('no_order'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Total Tagihan</label>
                                <input type="text" readonly name="total" value="<?=$row['total_tagihan']?>"
                                    class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Masukkan Pembayaran</label>
                                <input type="text" name="ip" class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukkan Pembayaran">
                                <?php echo form_error('ip'); ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?php } ?>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->