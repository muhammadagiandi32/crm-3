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
</div>
<!-- ./wrapper -->

<!-- AJAX -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

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
<script src="<?= base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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

                $.ajax({
                    type: "GET",
                    data: kode_item,
                    url: "<?php echo base_url('Dokument/cek/'); ?>",
                    success: function(data) {
                        alert(data);
                    }
                });
                // alert("gagal");

                // $.ajax({
                //     type: "POST",
                //     url: "<?php echo site_url('Dokument/cek/'); ?>" + nama_barang,
                //     dataType: "html",
                //     // success: function(data) {
                //     //     $("#table-container").html(data);
                //     // }
                //     alert(url);
                // });
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
</script>
</body>

</html>