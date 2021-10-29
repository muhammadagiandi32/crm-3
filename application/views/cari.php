<link rel="stylesheet" href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Buat PO Customers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dokument/cari') ?>">PO Customers</a></li>
                        <li class="breadcrumb-item active">Cari Customers</li>
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
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo form_open('dokument/cari');
                                ?>
                                <!-- <form action="<?= base_url('dokument/cari') ?>"> -->
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="customers" id="cari_customers" class="form-control col-sm-6" placeholder="Nama Customers">
                                    </div>
                                    <div class="col">
                                        <button type="submit" name="cari" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                <!-- </form> -->
                                <?php echo form_close() ?>
                                <br>
                                <br>
                                <hr>
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
<script type='text/javascript'>
    $(document).ready(function() {

        // Initialize 
        $("#autouser").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "<?= base_url() ?>Dokument/userList",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                // Set selection
                $('#autouser').val(ui.item.label); // display the selected text
                // $('#userid').val(ui.item.value); // save selected id to input
                return false;
            }
        });

    });
</script>