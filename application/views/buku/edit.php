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
              <div class="box-header">
                <h3 class="box-title">Form Ubah Data Buku</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
              <form method="POST" action="<?php echo base_url()."buku/saveDataBukuBaru"?>" enctype="multipart/form-data">
                <?php foreach($buku as $value) {?>
                  <input type="hidden" name="id" value=<?php echo $value->kd_register;?>>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Judul Buku</label>
                      <input type="text" name="judul" id="" class="form-control" value="<?php echo $value->judul_buku;?>" required>
                    </div>
                    <div class="form-group">
                      <label>Pengarang</label>
                      <input type="text" name="pengarang" id="" class="form-control" value="<?php echo $value->pengarang;?>" required>
                    </div>
                    <div class="form-group">
                      <label>Penerbit</label>
                      <input type="text" name="penerbit" id="" class="form-control" value="<?php echo $value->penerbit;?>" required>
                    </div>
                    <div class="form-group">
                      <label>Tahun Terbit</label>
                      <input type="text" name="tahun_terbit" id="" class="form-control" value="<?php echo $value->tahun_terbit;?>" required>
                    </div>
                    <!-- Btn -->
                  <?php } ?>
                    <div class="form-group">
                     <input type="Submit" name="submit" class="btn btn-success">
                    </div>
                  </div>
                 </form> 
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </section>
</div>