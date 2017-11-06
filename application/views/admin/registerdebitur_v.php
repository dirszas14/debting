<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register Debitur
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Form Registrasi Debitur</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="row">
               <div class="col-md-12"> 
                <form action="<?php echo base_url()?>admin/form_validation" class="form-horizontal" method="post">
                 <?php if ($this->uri->segment(2)=="inserted") {
                   echo '<div class="alert alert-success">
                       <strong>Success!</strong> Data Debitur Telah ditambahkan! 
                       </div>';
                 }?>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">ID Debitur</label>
                    <div class="col-md-4">
                      <input type="hidden" class="form-control" name="iddebitur" value="" readonly/>
                    </div>
                    <label for="" class="col-md-2 control-label">Username</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="username">
                       <span class="text-danger"><?php echo form_error("username"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label ">Nama</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nama">
                      <span class="text-danger"><?php echo form_error("nama"); ?></span>
                    </div>
                    <label for="" class="col-md-2 control-label ">Nama Barang</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nama_barang">
                       <span class="text-danger"><?php echo form_error("nama_barang"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-4">
                      <textarea name="alamat" class="form-control"></textarea>
                       <span class="text-danger"><?php echo form_error("alamat"); ?></span>
                    </div>
                    <label for="" class="col-md-2 control-label">Harga Barang</label>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="harga_barang">
                       <span class="text-danger"><?php echo form_error("harga_barang"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">NIK</label>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="nik">
                       <span class="text-danger"><?php echo form_error("nik"); ?></span>
                    </div>
                    <label for="" class="col-md-2 control-label ">Jatuh Tempo(Hari)</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="jatuh_tempo">
                       <span class="text-danger"><?php echo form_error("jatuh_tempo"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">No Telp</label>
                    <div class="col-md-4">
                      <input type="number" class="form-control" name="notelp">
                       <span class="text-danger"><?php echo form_error("notelp"); ?></span>
                    </div>
                    <label for="" class="col-md-2 control-label ">Minimal Cicilan</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="cicilan_min">
                       <span class="text-danger"><?php echo form_error("cicilan_min"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Email</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="email">
                       <span class="text-danger"><?php echo form_error("email"); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-2 control-label">Pekerjaan</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pekerjaan">
                       <span class="text-danger"><?php echo form_error("pekerjaan"); ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 pull-right">
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                    <input type="reset" class="btn btn-danger" name="reset" value="Batal">
                  </div>
                </form>
               </div>
              </div>
            </div>
          </div>
         </div>
       </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

