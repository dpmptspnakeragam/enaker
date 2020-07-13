<div class="modal fade" id="ModalGaleri" tabindex="-1" role="dialog" aria-labelledby="ModalGaleri" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Foto Galeri</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form role="form" action="../controller/aksi_tambahgaleri.php" method="post"  enctype="multipart/form-data">
      <?php  foreach ( $idmax->result() as $row ) {
      ?>
          <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
          </div>
        <?php } ?>
          <div class="form-group">
              <label class="control-label" for="judul">Judul</label>
              <input class="form-control" name="nama_galeri" placeholder="Judul" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="foto 1">Foto</label>
              <input type="file" name="foto[]" multiple required>
            <p class="text-danger">*Maks 5 Foto</p>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label for="tgl_galeri">Tanggal</label>
              <input  type="date" class="form-control" name="tgl_galeri" placeholder="Tanggal" required>
          </div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="kirim" value="kirim"><i class="fa fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>