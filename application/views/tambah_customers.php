<link rel="stylesheet" href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $titel; ?></h1>
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
                <?= $this->session->flashdata('msg') ?>

                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <!-- <h3 class="card-title"></h3> -->
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('customers/tambah_customers'); ?>
                        <div class="card-body">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Customers</label>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="text" name="namacs" class="form-control" id="inputEmail3" placeholder="Nama Customers">
                                </div>
                            </div>
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Email</label>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                                </div>
                            </div>
                            <label for="inputPassword3" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="text" name="notelfon" onkeypress="return hanyaAngka(event)" class="form-control" id="inputPassword3" placeholder="No Telepon">
                                </div>
                            </div>
                            <label for="Kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="text" name="kota" class="form-control" id="Kota" placeholder="Kota">
                                </div>
                            </div>
                            <label for="Provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <input type="text" name="provinsi" class="form-control" id="Provinsi" placeholder="Provinsi">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="tambahcs" class="btn btn-info">Tambah</button>
                            <button type="submit" class="btn btn-default float-right">Batal</button>
                        </div>
                        <!-- /.card-footer -->
                        </form>
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- JS AJAX -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    $(document).ready(function() {
        // membatasi jumlah inputan
        var maxGroup = 30;

        //melakukan proses multiple input 
        $(".addMore").click(function() {
            if ($('body').find('.fieldGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click", ".remove", function() {
            $(this).parents(".fieldGroup").remove();
        });
    });
</script>