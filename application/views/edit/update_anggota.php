<?php 
require '../koneksi.php';
   $id_anggota = $id_anggota;
    $sql = pg_query("SELECT * FROM anggota where id_anggota=$id_anggota");
    while ($data =  pg_fetch_array($sql)){
        $id_anggota=$data['id_anggota'];
    $id=$data['id'];
    $nama_anggota=$data['nama_anggota'];
    $jabatan_anggota=$data['jabatan_anggota'];
    $nip_anggota=$data['nip_anggota'];
    $cp_anggota=$data['cp_anggota'];
    $gol_anggota=$data['gol_anggota'];
    $gambar_anggota=$data['gambar_anggota'];
    }
?>
<div class="modal fade" id="EditAnggota<?php echo $id_anggota;?>" tabindex="-1" role="dialog" aria-labelledby="ModalAnggotalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form role="form" action="updatepenjabat_p.php"method="post"  enctype="multipart/form-data">
        <div class="form-group" hidden>
            <label class=" control-label">Id</label>
            <input type="text" class="form-control" id="id" name="id_anggota" value="<?php echo $id_anggota;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="nama">Nama</label>
            <input class="form-control" name="nama_anggota" placeholder="Nama" value="<?php echo $nama_anggota;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="nip">NIP</label>
            <input class="form-control" name="nip_anggota" placeholder="NIP" value="<?php echo $nip_anggota;?>">
        </div>
        <div class="form-group">
        <label class="control-label" for="jabatan">Bidang</label>
          <select required name="id" class="form-control" value="<?php echo $id;?>">
          <?php
              require 'connect.php';
              $sql = pg_query("select * from penjabat");
              while($row1 = pg_fetch_array($sql)){
              echo "<option value=\"$row1[id]\">$row1[jabatan]</option>";}
              ?>
          </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="jabatan">Jabatan</label>
            <input class="form-control" name="jabatan_anggota" placeholder="Jabatan" value="<?php echo $jabatan_anggota;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="cp">CP</label>
            <input class="form-control" name="cp_anggota" placeholder="CP" value="<?php echo $cp_anggota;?>">
        </div>
        <div class="form-group">
        <label class="control-label" for="golongan">Golongan</label>
        <select required name="gol_anggota" class="form-control"  onchange="<?php echo $gol_anggota;?>" value="<?php echo $gol_anggota;?>">
          <option>IV/e</option><option>IV/d</option><option>IV/c</option><option>IV/b</option><option>IV/a</option>
          <option>III/d</option><option>III/c</option><option>III/b</option><option>III/a</option>
          <option>II/d</option><option>II/c</option><option>II/b</option><option>II/a</option>
          <option>I/d</option><option>I/c</option><option>I/b</option><option>I/a</option>
          <option>PTT</option><option>Kontrak</option><option>THL</option>
          </select>
        </div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="../assets/img/<?php echo "$gambar_anggota"; ?>" width='80' height='60'/>
          <input name="gambar" type="file" id="gambar" />
        <input name="x" type="hidden" id="x" value="<? echo $gambar;?>" />
          </div>
        </div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
