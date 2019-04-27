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
                  <h3 class="box-title">Data Peminjaman Buku
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="dataBuku" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Yang Melayani</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Mengembalikan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = 1;
                     foreach ($peminjam as $item){  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$item->anggota;?></td>
                        <td><?=$item->petugas;?></td>
                        <td><?=$item->judul_buku;?></td>
                        <td><?=$item->tgl_pinjam;?></td>
                        <?php if($item->tgl_kembali == NULL || $item->tgl_kembali == 0000-00-00){ ?>
                        <td>
                          <a class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Buku Belum dikembalikan</a>
                        </td>
                        <?php }else{ ?>
                        <td>
                          <?=$item->tgl_kembali;?>
                        </td>
                        <?php } ?>
                        <td>
                          <a class="btn btn-danger btn-xs" href="/perpus/petugas/hapusDataPinjam/".$item->kd_pinjam>Hapus</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Yang Melayani</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Mengembalikan</th>
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