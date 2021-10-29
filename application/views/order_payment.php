<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pembayaran Customer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Reporting</a></li>
            <li class="breadcrumb-item active">Pembayaran Customer</li>
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

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pembayaran Customer</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama Customer </th>
                    <th>Pembayaran Masuk</th>
                    <th>Total Tagihan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($query as $row) {
                  ?>
                    <tr>
                      <td>
                        <?= $row['nama_customers'] ?>
                      </td>
                      <td>
                        Rp . <?= number_format($row['pembayaran']) ?>
                      </td>
                      <td>
                        Rp. <?= number_format($row['total_tagihan']) ?>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                  <th>Nama Customer </th>
                  <th>Pembayaran Masuk</th>
                  <th>Total Tagihan</th>
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