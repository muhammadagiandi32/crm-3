<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rusma Jaya88</title>


    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet"
        href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script> -->
        <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">

        <div class="box" id="printJS-table">
            <!-- Google Font: Source Sans Pro -->
            <!-- <link rel="stylesheet"
        href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
            <!-- Font Awesome -->
            <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
            <!-- DataTables -->
            <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">
            <style type="text/css" media="print">
                @media print {
                    #printJS-table {
                        margin-left: 0px;
                    }


                    @page {
                        width: 210mm;
                        height: 148.5mm;
                        margin: 0px auto;

                    }
                }

                body {
                    font-size: 18px;
                }
            </style>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Invoice</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Invoice</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- <div class="callout callout-info">
                            <h5><i class="fas fa-info"></i> Note:</h5>
                            This page has been enhanced for printing. Click the print button at the bottom of the
                            invoice to
                            test.
                        </div> -->


                                <!-- Main content -->
                                <div id="printarea" class="invoice p-3 mb-3">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                <i class="fas fa-globe mt-3"></i> RusmaJaya88
                                                <small class="float-right mt-3">Tgl: <?= date('d-m-Y'); ?></small>
                                            </h4>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">
                                            <address>
                                                <strong>Rusma Jaya88</strong><br>
                                                Jl. Peternakan 1 No.31<br>
                                                Phone:021-54313261<br>
                                                Email: admin@rusmajaya88.com
                                            </address>
                                        </div>
                                        <div class="col-sm-4 invoice-col">
                                            <address>
                                                <strong><?= $query->nama_customers ?></strong><br>
                                                <!-- <?= $query->alamat ?><br> -->
                                                Phone: <?= $query->notelfon ?><br>
                                                Alamat: <?= $query->alamat ?>
                                            </address>
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b>Invoice #007612</b><br>
                                            <br>
                                            <?php
                                            $Today = date('d-m-Y');

                                            // add 3 days to date
                                            $jatuh_tempo = Date('d-m-Y', strtotime('+7 days'));
                                            ?>
                                            <b>Order ID:</b> <?= $query->no_order ?><br>
                                            <b>Jatuh Tempo:</b> <?= $jatuh_tempo; ?><br>
                                            <!-- <b>BCA:</b> 968-34567 <br>
                                            <b>A/N:</b> MUHAMMAD AGIANDI -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Item</th>
                                                        <th>Nama Item</th>
                                                        <th>Jumlah</th>
                                                        <th>Satuan</th>
                                                        <th>Harga</th>
                                                        <th>Pot</th>
                                                        <th>Total</th>
                                                        <!-- <th>Description</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $total = 0;
                                                    $final = 0;
                                                    foreach ($query2 as $row) {
                                                        $subtotal = $row['jumlah'] * $row['harga'];
                                                        $harga_akhir = $subtotal;

                                                        $final += $harga_akhir;
                                                    ?>
                                                        <tr>
                                                            <td></td>
                                                            <td><?= $row['kode_item']; ?></td>
                                                            <td><?= $row['nama_barang']; ?></td>
                                                            <td><?= $row['jumlah']; ?></td>
                                                            <td><?= $row['unit']; ?></td>
                                                            <!-- <td>El snort testosterone trophy driving gloves handsome</td> -->
                                                            <td>Rp. <?= number_format($row['harga']); ?></td>
                                                            <td></td>
                                                            <td>Rp. <?= number_format($harga_akhir); ?></td>
                                                        </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-6">
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p>Admin</p>
                                                    <br>
                                                    <br>
                                                    <p>(................)</p>
                                                </div>
                                                <div class="col-4">
                                                    <p>Pengirim</p>
                                                    <br>
                                                    <br>
                                                    <p>(................)</p>
                                                </div>
                                                <div class="col-4">
                                                    <p>Penerima</p>
                                                    <br>
                                                    <br>
                                                    <p>(................)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <!-- <p class="lead">Jatuh Tempo <?= $jatuh_tempo ?></p> -->
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th>Jumlah Item:</th>
                                                        <td> <?= $query3->jumlah; ?></td>
                                                        <th>Sub Total:</th>
                                                        <td>Rp. <?= number_format($final); ?> </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <button type="button" onclick="printJS('printJS-table', 'html')">
                                                Print Form
                                            </button>
                                            <form action="<?= base_url('Insert/insert_tagihan') ?>" method="POST">
                                                <!-- // encrypt_url($row['no_order']); -->
                                                <input type="hidden" name="id" value="<?= encrypt_url($row['no_order']) ?>">
                                                <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i>
                                                    Submit
                                                    Tagihan
                                                </button>
                                            </form>

                                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Generate PDF
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.invoice -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
        </div>

        <!-- /.content-wrapper -->


        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2021 <a href="https://rusmanjaya88.com">rusmanjaya88</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- ./wrapper -->

        <!-- AJAX -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
        </script>

        <!-- <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script> -->
        <!-- <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- <script src="<?= base_url(); ?>plugins/jquery/jquery.min.js"></script> -->
        <!-- Bootstrap 4 -->
        <script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?= base_url(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url(); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <!-- AdminLTE App -->
        <script src="<?= base_url(); ?>dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url(); ?>dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
            $(document).ready(function() {
                $('#example1').DataTable({
                    dom: 'Bfrtip',
                    "pagingType": "full_numbers",
                    "paging": true,
                    "lengthMenu": [10, 25, 50, 75, 100],
                    "buttons": ["copy", "csv", "excel", "pdf", "print"],
                })
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $("#nama_barang").autocomplete({
                    source: "<?php echo site_url('Dokument/cari_item_barang/?'); ?>",
                    select: function(event, ui) {
                        $('[name="nama_barang[]"]').val(ui.item.label);
                        $('[name="kode_item[]"]').val(ui.item.kode_item);
                    }
                });
            });

            $(document).ready(function() {
                $("#cari_customers").autocomplete({
                    source: "<?php echo site_url('Dokument/cari_customers/?'); ?>",
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // membatasi jumlah inputan
                // var maxGroup = 30;
                //melakukan proses multiple input 
                $(".addMore").click(function() {
                    if ($(this).val() == '' && $('#nama_barang').val() == '') {
                        alert('Data Tidak Boleh kosong');
                        return false;
                    } else {
                        if ($('#qty').val() == '' && $('#harga').val() == '') {
                            alert('Data Tidak Boleh kosong');
                        } else {
                            var kode_item = $('#kode_item').val();
                            var nama_item = $('#nama_barang').val();
                            var qty = $('#qty').val();
                            var harga = $('#harga').val();

                            $('table').append('<tr>' +
                                '<td>' + kode_item + '<input type="hidden" value="' + kode_item +
                                '" name="kode_item2[]">' + '</td>' +
                                '<td>' + nama_item + '<input type="hidden" value="' + nama_item +
                                '" name="nama_barang2[]">' + '</td>' +
                                '<td>' + qty + '<input type="hidden" value="' + qty + '" name="jumlah[]">' +
                                '</td>' +
                                '<td>' + harga + '<input type="hidden" value="' + harga + '" name="harga[]">' +
                                '</td>' +
                                '<td> <a href = "javascript:void(0)"class = "btn btn-danger remove" > ' +
                                '<i class = "fas fa-trash" ></i>' + '</a >' + '</td>' +
                                '</tr>');

                            // $('#inputarr').append(
                            //     '<input type="hidden" value="' + kode_item + '" name="kode_item2[]">' +
                            //     '<input type="text" value="' + nama_item + '" name="nama_barang2[]">' +
                            //     '<input type="hidden" value="' + qty + '" name="jumlah[]">' +
                            //     '<input type="hidden" value="' + harga + '" name="harga[]">'
                            // );
                            // alert(value);
                            // if ($('body').find('.fieldGroup').length < maxGroup) {
                            //     var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
                            //     $('body').find('.fieldGroup:last').after(fieldHTML);
                            // } else {
                            //     alert('Maximum ' + maxGroup + ' groups are allowed.');
                            // }
                            // $(this).removeAttr('value');
                        }
                    }
                });
                $(".addMore").on("click", function(event) {
                    $("#kode_item").val("");
                    $("#nama_barang").val("");
                    $("#qty").val("");
                    $("#harga").val("");
                });
                // remove fields group
                $("body").on("click", ".remove", function() {
                    $(this).parents("tr").remove();
                });

            });


            $("#btn").click(function() {
                $("#printarea").show();
                window.print();
            });
        </script>
</body>

</html>