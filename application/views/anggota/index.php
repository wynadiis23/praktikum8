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
                <h3 class="box-title">Form Peminjaman Buku</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <form method="POST" enctype="multipart/form-data" action=<?php echo base_url()."anggota/peminjaman";?>>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Pilih Nama Anda</label>
                      <select class="form-control" name="anggota">
                        <option value="">PILIH</option>
                        <?php foreach ($anggota as $data) { ?>
                          <option value="<?=$data->kd_anggota;?>"><?=$data->nama;?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih Nama Petugas</label>
                        <select class="form-control" name="petugas" id="petugas" >
                        <?php foreach ($petugas as $data) {?>
                            <option value="<?=$data->kd_petugas?>"><?=$data->nama?></option>
                            <?php } ?>
                        </select>    
                    </div>
                    <div class="form-group">
                      <label>Pilih Buku</label>
                        <select class="form-control" name="buku" >
                        <?php foreach ($buku as $data) {?>
                            <option value="<?=$data->kd_register?>"><?=$data->judul_buku?></option>
                            <?php } ?>
                        </select>    
                    </div> 
                    <!-- Btn -->
                    <div class="form-group">
                     <input type="submit" name="submit" value="Pinjam" class="btn btn-success">
                    </div>
                  </div>
                 </form> 
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </section>
</div>