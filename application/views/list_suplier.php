<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>List Suppliers</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Supplier</a></li>
            <li class="breadcrumb-item active">List Suppliers</li>
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
              <h3 class="card-title">List Suppliers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Kode Supplier </th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Kota</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($query as $row) {
                  ?>
                    <tr>
                      <td>
                        <?= $row['kode_supplier'] ?>
                      </td>
                      <td>
                        <?= $row['nama_supplier'] ?>
                      </td>
                      <td>
                        <?= $row['alamat'] ?>
                      </td>
                      <td>
                        <?= $row['email'] ?>
                      </td>
                      <td>
                        <?= $row['no_tlp'] ?>
                      </td>
                      <td>
                        <?= $row['kota'] ?>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                  <th>Kode Supplier </th>
                  <th>Nama Supplier</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Kota</th>
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