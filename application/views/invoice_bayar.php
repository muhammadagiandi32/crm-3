<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold"><?= $title ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="callout callout-info">
                                <h5>Total Tagihan:</h5>
                                Rp. <?= $tagihan ?>
                            </div>
                            <!-- <?php echo validation_errors(); ?> -->
                            <form action="<?= base_url(); ?>/Dokument/invoice_insert" method="POST"></form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" name="id_tagihan" value="<?= $id_tagihan ?>" hidden>
                                <input type="text" name="nominal" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" type="submit">BAYAR</button>
                            </form>
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