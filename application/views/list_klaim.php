


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $titel ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><?= $titel ?></a></li>
            <li class="breadcrumb-item active">Klaim</li>
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
              <h3 class="card-title"><?= $titel ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No. Permintaan</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>No. Kendaraan</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($query as $row){
                    ?>
                  <tr>
                    <td>
                        <?= $row['no_permintaan']?>
                    </td>
                    <td>
                        <?= $row['nama']?>
                    </td>
                    <td>
                        <?= $row['tanggal']?>
                    </td>
                    <td>
                        <?= $row['no_kendaraan']?>
                    </td>
                    <td>
                        <?= $row['tujuan']?>
                    </td>
                    <td>
                        <?= $row['status']?>
                    </td>
                    <td>
                        <?= $row['total']?>
                    </td>
                    <td>
                        <a href="<?= base_url('Klaim/print_klaim/').encrypt_url($row['id_kas']) ?>" class="btn btn-success">
                            Print
                        </a>
                    </td>
                  </tr>
                  <?php
                }
                ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No. Permintaan</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>No. Kendaraan</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
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