<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
<br/>
<div class="container">
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
</div>