<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
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
          <?= $this->session->userdata('msg') ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $totalpengeluaran =0;
                    foreach($query2 as $row){

                    
                    ?>
                  <tr>
                      <td><?=$row['no_permintaan']?></td>
                      <td><?=$row['tanggal']?></td>
                      <td><?=$row['status']?></td>
                    <td>Rp. <?=number_format($row['total'])?></td>
                    <td>X</td>
                  </tr>
                  <?php
                        $totalpengeluaran += $row['total'];
                    }
                  ?>
                </tbody>
                
                </tbody>
              </table>
              <br>
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>Total Saldo Awal</th>
                    <th>Total Pengeluaran</th>
                    <th>Saldo Akhir</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($query as $row){
                        $saldoakhir = $row['saldo_awal'] - $totalpengeluaran;
                    ?>
                  <tr>
                    <td><?=$row['saldo_awal']?></td>
                    <td>Rp. <?=number_format($totalpengeluaran)?></td>
                    <td>Rp. <?=number_format($saldoakhir)?></td>
                  </tr>
                  <?php
                    }
                  ?>
                  
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