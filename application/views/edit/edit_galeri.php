<?php 
require '../koneksi.php';
    $id_galeri = $id_galeri ;
   $sql = pg_query("SELECT * FROM galeri where id_galeri=$id_galeri");
    while ($data =  pg_fetch_array($sql)){
    $id_galeri=$data['id_galeri'];
    $nama_galeri=$data['nama_galeri'];
    $foto1=$data['foto1'];
    $foto2=$data['foto2'];
    $foto3=$data['foto3'];
    $foto4=$data['foto4'];
    $foto5=$data['foto5'];
    $tgl_galeri=$data['tgl_galeri'];
    }
?>
<div class="modal fade" id="EditGaleri<?php echo $id_galeri;?>" tabindex="-1" role="dialog" aria-labelledby="ModalGaleriLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Bursa Khusus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="../controller/aksi_updategaleri.php"method="post"  enctype="multipart/form-data">
        <div class="form-group" hidden>
            <label class=" control-label">Id</label>
            <input type="text" class="form-control" id="id" name="id_galeri" value="<?php echo $id_galeri;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="judul">Judul</label>
            <input class="form-control" name="nama_galeri" placeholder="Judul" value="<?php echo $nama_galeri;?>" required>
        </div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto 1</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="../imgupload/<?php echo "$foto1"; ?>" width='80' height='60'/>
          <input name="foto1" type="file" id="foto1" />
          <input name="x1" type="hidden" id="x1" value="<? echo $foto1;?>" />
          </div>
        </div></div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto 2</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="../imgupload/<?php echo "$foto2"; ?>" width='80' height='60'/>
          <input name="foto2" type="file" id="foto1" />
          <input name="x2" type="hidden" id="x2" value="<? echo $foto2;?>" />
          </div>
        </div></div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto 3</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="../imgupload/<?php echo "$foto3"; ?>" width='80' height='60'/>
          <input name="foto3" type="file" id="foto3" />
          <input name="x3" type="hidden" id="x3" value="<? echo $foto3;?>" />
          </div>
        </div></div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto 4</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="../imgupload/<?php echo "$foto4"; ?>" width='80' height='60'/>
          <input name="foto4" type="file" id="foto4" />
          <input name="x4" type="hidden" id="x4" value="<? echo $foto4;?>" />
          </div>
        </div></div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto 5</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="../imgupload/<?php echo "$foto5"; ?>" width='80' height='60'/>
          <input name="foto5" type="file" id="foto5" />
        <input name="x5" type="hidden" id="x5" value="<? echo $foto5;?>" />
          </div>
        </div></div>
        <div class="row">
        <div class="form-group col-lg-3">
            <label for="tgl_galeri">Tanggal</label>
            <input  type="date" class="form-control" name="tgl_galeri" value="<?php echo $tgl_galeri;?>" placeholder="Tanggal">
        </div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
