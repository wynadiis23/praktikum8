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
                  <h3 class="box-title">Data Peminjaman Buku Data Manual
                  </h3>
                  <span><a href="<?php echo base_url()."anggota/riwayatPeminjam"?>">Data Datatables</a></span>
                </div><!-- /.box-header -->
                <table border="1">
                    <tr>
                        <th>no</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas yang Melayani</th>
                        <th>Judul Buku</th>		
                        <th>Tanggal Peminjaman</th>		
                    </tr>
                    <?php 
                    $no = $this->uri->segment('3') + 1;
                    foreach($peminjaman as $data){ 
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data->anggota ?></td>
                        <td><?php echo $data->petugas ?></td>
                        <td><?php echo $data->judul_buku ?></td>
                        <td><?php echo $data->tgl_pinjam ?></td>
                    </tr>
                <?php } ?>
                </table>
                <br/>
                <?php 
                echo $this->pagination->create_links();
                ?>
            </div><!-- /.col -->
          </div><!-- /.row -->
    </section>
    </div>
</div>  