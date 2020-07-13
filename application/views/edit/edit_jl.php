<?php foreach($jumlah_latih->result() as $row) {
?>
<div class="modal fade" id="EditJumlahLatih<?php echo $row->id_jumlah; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalProfilLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Jumlah Latih</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/jumlah_latih/ubah"method="post"  enctype="multipart/form-data">
          <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id_jumlah" value="<?php echo $id_jumlah;?>">
          </div>
              <div class="row">
              <div class="form-group col-lg-3">
              <label class="control-label" for="id_jenis">Nama Lembaga</label>
              <select required name="nama_lembaga"class="form-control" value="<?php echo $nama_lembaga;?>">
                  <?php
                  require '../koneksi.php';
                  $sql = pg_query("select * from profillpk");
                  while($row1 = pg_fetch_array($sql)){
                  echo "<option value=\"$row1[id_profil]\">$row1[nama_lpk]</option>";}
                  ?>
              </select>
          </div></div>
          <div class="form-group">
              <label class="control-label" for="tujuhbelas">2017</label>
              <input class="form-control" name="tujuhbelas" placeholder="Jumlah" value="<?php echo $tujuhbelas;?>">
          </div>
          <div class="form-group">
              <label class="control-label" for="delapanbelas">2018</label>
              <input class="form-control" name="delapanbelas" placeholder="Jumlah" value="<?php echo $delapanbelas;?>">
          </div>
          <div class="form-group">
              <label class="control-label" for="sembilanbelas">2019</label>
              <input class="form-control" name="sembilanbelas" placeholder="Jumlah" value="<?php echo $sembilanbelas;?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
