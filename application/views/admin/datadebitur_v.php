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
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
              <div class="table-responsive">
              <table id="datadebitur" class="table  table-hover">
                <thead>
                <tr>
                  <th>Id Debitur</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>NIK</th>
                  <th>Pekerjaan</th>
                  <th>Nama Barang</th>
                  <th>Harga Barang</th>
                  <th>Cicilan Minimal</th>
                  <th>No Telepon</th>
                  <th>E-Mail</th>
                  <th>Jatuh Tempo</th>
                </tr>
                 
                </thead>
                <tbody>
                   <?php if($fetch_data->num_rows()>0) :?> 
                      <?php foreach ($fetch_data->result() as $row) :?>
                        <tr>
                          <td><?php echo $row->id_debitur;?></td>
                          <td><?php echo $row->username;?></td>
                          <td><?php echo $row->nama;?></td>
                          <td><?php echo $row->alamat;?></td>
                          <td><?php echo $row->nik;?></td>
                          <td><?php echo $row->pekerjaan;?></td>
                          <td><?php echo $row->nama_barang;?></td>
                          <td><?php echo "Rp.".number_format($row->harga_barang);?></td>
                          <td><?php echo "Rp.".number_format($row->cicilan_min);?></td>
                          <td><?php echo $row->no_telp;?></td>
                          <td><?php echo $row->email;?></td>
                          <td><?php echo $row->jatuh_tempo;?></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
              </table>
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