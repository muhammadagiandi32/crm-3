<div class="content-wrapper" style="min-height: 1602px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Klaim Cash</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Klaim Cash</a></li>
              <li class="breadcrumb-item active">Kasir</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Klaim Cash</h3>
            <?=$this->session->userdata('msg')?>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>

            
          </div>
        </div>
        <div class="card-body">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Klaim </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('Klaim/insert_cash') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder=" Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggall Permintaan</label>
                    <input type="date" name="tgl_permintaan" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Permintaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Kendaraan</label>
                    <input type="text" name="no_kendaraan" class="form-control" id="exampleInputEmail1" placeholder="Nomer Kendaraan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="exampleInputEmail1" placeholder="Tujuan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Parkir Cash</label>
                    <input type="text" name="parkir" class="form-control" id="exampleInputEmail1" placeholder="Parkir Cash">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bahan Bakar</label>
                    <input type="text" name="bahan_bakar" class="form-control" id="exampleInputEmail1" placeholder="Bahan Bakar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Biaya Lain - Lain</label>
                    <input type="text" name="lain_lain" class="form-control" id="exampleInputEmail1" placeholder="Biaya Lain - Lain">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="Keterangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" name="status" value="Cash" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" readonly>
                  </div>
                  <!-- <select name="status[]" class="form-select"
                    aria-label="Default select example" id="">
                      <option value="">Status</option>
                      <option value="Cash">Cash</option>
                      <option value="E-Money">E - Money</option>
                  </select> -->
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Total Biaya</label>
                    <input type="text" name="total_biaya" class="form-control" id="exampleInputEmail1" placeholder="Total Biaya">
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
        
    </section>
    <!-- /.content -->
  </div>