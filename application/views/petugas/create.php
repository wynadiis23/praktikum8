<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
<br/>
<div class="container">

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
            <div class="card-body">
                <?php if($this->session->flashdata('msg_alert_error')) { ?>
                      <div class="alert alert-danger">
                          <?=$this->session->flashdata('msg_alert_error');?>
                      </div>
                <?php } ?>
                <?php if($this->session->flashdata('msg_alert')) { ?>
                      <div class="alert alert-success">
                          <?=$this->session->flashdata('msg_alert');?>
                      </div>
                <?php } ?>
              <div class="box-header">
                <h3 class="box-title">Form Tambah Anggota</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
              <form method="POST" action="<?php echo base_url()."petugas/tambahkan"?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Anggota</label>
                      <input type="text" name="nama" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Prodi</label>
                      <input type="text" name="prodi" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Jenjang</label>
                      <input type="text" name="jenjang" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" id="" class="form-control">
                    </div>
                    <!-- Btn -->
                    <div class="form-group">
                     <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                    </div>
                  </div>
                 </form> 
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </section>
</div>