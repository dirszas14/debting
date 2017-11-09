  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Debitur
      </h1>
    </section>

  

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <?php if ($this->session->flashdata('info')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Info!</h4>
            Berhasil Mendaftar Debitur
          </div>
        <?php endif ?>
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
              <div class="table table-responsive">
                <div class="col-md-6 col-md-offset-3">
                  <table class="table table-condensed">
                  <tr>
                    <td class="col-md-3">Id debitur</td>
                    <td class="col-md-2">:</td>
                    <td class="col-md-7"><?=$fetch_data['id_debitur']?></td>
                  </tr>
                  <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?=$fetch_data['nik']?></td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><b><?=$fetch_data['username']?></b></td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?=$fetch_data['nama']?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$fetch_data['alamat']?></td>
                  </tr>
                  <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?=$fetch_data['no_telp']?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?=$fetch_data['email']?></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?=$fetch_data['pekerjaan']?></td>
                  </tr>
                  <tr>
                    <td>Nama barang</td>
                    <td>:</td>
                    <td><?=$fetch_data['nama_barang']?></td>
                  </tr>
                  <tr>
                    <td>Harga barang</td>
                    <td>:</td>
                    <td>Rp.<?=number_format($fetch_data['harga_barang'])?></td>
                  </tr>
                  <tr>
                    <td>Cicilan minimal</td>
                    <td>:</td>
                    <td><?=$fetch_data['cicilan_min']?></td>
                  </tr>
                  <tr>
                    <td>Jatuh tempo</td>
                    <td>:</td>
                    <td><?=$fetch_data['jatuh_tempo']?></td>
                  </tr>
                </table>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->