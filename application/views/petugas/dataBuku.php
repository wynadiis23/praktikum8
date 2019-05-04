<section class="content">
      <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="card-body">
                
                <div class="box-header">
                  <h3 class="box-title">Data Buku
                  </h3>
                </div><!-- /.box-header -->
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
                <div class="box-body">
                  <table id="dataBuku" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = 1;
                     foreach ($buku as $item){  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$item->judul_buku;?></td>
                        <td><?=$item->pengarang;?></td>
                        <td><?=$item->penerbit;?></td>
                        <td><?=$item->tahun_terbit;?></td>
                        <td>
                          <form method="GET" action=<?php echo base_url()."buku/edit";?>>
                            <input type="hidden" name="id" value=<?php echo $item->kd_register;?>>
                            <button type="Submit" class="btn btn-info">Edit</button>
                          </form>
                          <!-- <form method="GET" action=<?php echo base_url()."buku/hapusDataBuku";?>>
                            <input type="hidden" name="id_" value=<?php echo $item->kd_register;?>>
                            <button type="Submit" class="btn btn-warning">Hapus</button>
                          </form> -->
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th>No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
    </section>
    </div>
</div>
<?php $this->load->view('script/script') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/dataTables.bootstrap.min.js"></script>

    <script>
      $(function () {
        $('#dataBuku').DataTable({"pageLength": 10});
      });

    </script>