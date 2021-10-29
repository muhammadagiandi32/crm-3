<link rel="stylesheet" href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
                                <?php echo validation_errors();
                                echo $this->session->flashdata('msg');
                                ?>

                                <form method="post" action="">
                                    <input type="text" name="supplier[]" class="form-control col-sm-6" placeholder="Nama Supplier">
                                    <br>
                                    <div class="form-group fieldGroup">
                                        <div class="input-group">
                                            <!-- NAME[] -->
                                            <input type="text" name="kode_item[]" class="form-control" placeholder="Kode Item">
                                            <input type="text" name="nama_barang[]" class="form-control" placeholder="Nama Barang">
                                            <input type="text" name="jumlah[]" class="form-control" placeholder="Jumlah">
                                            <select name="unit[]" id="">
                                                <option value="KG">KG</option>
                                                <option value="DUS">DUS</option>
                                                <option value="PCS">PCS</option>
                                            </select>
                                            <input type="text" name="harga[]" class="form-control" placeholder="Harga">
                                            <div class="input-group-addon ml-3">
                                                <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit" />
                                </form>
                                <div class="form-group fieldGroupCopy" style="display: none;">
                                    <div class="input-group">
                                        <input type="text" name="kode_item[]" class="form-control" placeholder="Kode Item">
                                        <input type="text" name="nama_barang[]" class="form-control" placeholder="Nama Barang">
                                        <input type="text" name="jumlah[]" class="form-control" placeholder="Jumlah">
                                        <select name="unit[]" id="">
                                            <option value="KG">KG</option>
                                            <option value="DUS">DUS</option>
                                            <option value="PCS">PCS</option>
                                        </select>
                                        <input type="text" name="harga[]" class="form-control" placeholder="Harga">
                                        <div class="input-group-addon">
                                            <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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