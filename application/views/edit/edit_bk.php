<?php 
require '../koneksi.php';
    $id_sekolah= $id_sekolah ;
   $sql = pg_query("SELECT * FROM sekolah where id_sekolah=$id_sekolah");
    while ($data =  pg_fetch_array($sql)){
        $id_sekolah=$data['id_sekolah'];
        $nama_sekolah=$data['nama_sekolah'];
        $alamat=$data['alamat'];
        $jumlah_siswa=$data['jumlah_siswa'];
    }
?>
<div class="modal fade" id="EditBK<?php echo $id_sekolah;?>" tabindex="-1" role="dialog" aria-labelledby="ModalBKLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Bursa Khusus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="../controller/aksi_bursakhusus.php?aksi=update"method="post"  enctype="multipart/form-data">
        <div class="form-group" hidden>
            <label class=" control-label">Id</label>
            <input type="text" class="form-control" id="id" name="id_sekolah" value="<?php echo $id_sekolah;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="nama_sekolah">Nama Sekolah</label>
            <input class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo $nama_sekolah;?>" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="alamat">Alamat</label>
            <input class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $alamat;?>" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="jumlah_siswa">Jumlah Siswa</label>
            <input class="form-control" name="jumlah_siswa" placeholder="Jumlah Siswa" value="<?php echo $jumlah_siswa;?>" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
