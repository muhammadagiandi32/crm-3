<div class="content-wrapper" style="min-height: 1602px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Saldo Awal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Saldo Awal</a></li>
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
          <h3 class="card-title">Saldo Awal</h3>
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
                <h3 class="card-title">Input Saldo Awal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('Saldo/insert_saldo') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masukan Saldo Awal</label>
                    <input type="text" name="input_saldo" class="form-control" id="exampleInputEmail1" placeholder="Masukan Saldo Awal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tgl Saldo Awal</label>
                    <input type="date" name="tgl_saldo" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
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