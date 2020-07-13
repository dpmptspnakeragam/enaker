<div class="modal fade" id="ModalBursaKhusus" tabindex="-1" role="dialog" aria-labelledby="ModalBursaKhusus" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Bursa Khusus</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/bursa_khusus/tambah" method="post"  enctype="multipart/form-data">
      <?php  foreach ( $idmax->result() as $row ) {
      ?>
          <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->idmax+1;?>">
          </div>
      <?php } ?>
          <div class="form-group">
              <label class="control-label" for="nama_sekolah">Nama Sekolah</label>
              <?php  foreach ($nama as $row ) {
              ?>
                <input class="form-control" name="sekolah" placeholder="Jumlah Laki-laki" value="<?php echo $row->nama_sekolah; ?>" required>
              <?php } ?>
          </div>
          <div class="form-group">
              <label class="control-label" for="lk">Jumlah Penempatan Alumni (Laki-laki)</label>
              <input class="form-control" name="lk" placeholder="Jumlah Laki-laki" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="pr">Jumlah Penempatan Alumni (Perempuan)</label>
              <input class="form-control" name="pr" placeholder="Jumlah Perempuan" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="instansi">Perusahaan / Instansi</label>
              <input class="form-control" name="instansi" placeholder="Nama Perusahaan / Instansi" required>
          </div><div class="form-group">
              <label class="control-label" for="tahun">Tahun</label>
              <input class="form-control" name="tahun" placeholder="Tahun" required>
          </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>