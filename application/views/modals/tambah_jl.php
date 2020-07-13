<div class="modal fade" id="ModalJumlahLatih" tabindex="-1" role="dialog" aria-labelledby="ModalJumlahLatih" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jumlah Latih</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form role="form" action="../controller/aksi_jl.php?aksi=tambah" method="post"  enctype="multipart/form-data">
      <?php 
          include '../koneksi.php';
          $query = pg_query("SELECT MAX(id_jumlah) AS id FROM jumlah_latih");
          $result = pg_fetch_array($query);
          $idmax = $result['id'];
          if ($idmax==null) {$idmax=1;}
          else {$idmax++;}
      ?>

          <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $idmax+1;?>">
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label class="control-label" for="id_jenis">Nama Lembaga</label>
              <select required name="nama_lembaga"class="form-control">
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
              <input class="form-control" name="tujuhbelas" placeholder="Jumlah">
          </div>
          <div class="form-group">
              <label class="control-label" for="delapanbelas">2018</label>
              <input class="form-control" name="delapanbelas" placeholder="Jumlah">
          </div>
          <div class="form-group">
              <label class="control-label" for="sembilanbelas">2019</label>
              <input class="form-control" name="sembilanbelas" placeholder="Jumlah">
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