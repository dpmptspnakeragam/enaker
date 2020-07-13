<div class="modal fade" id="ModalMagang" tabindex="-1" role="dialog" aria-labelledby="ModalMagang" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Magang</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url(); ?>admin/pemagangan/tambah"method="post"  enctype="multipart/form-data">
        <?php  foreach ( $idmax->result() as $row ) {
        ?>
            <div class="form-group" hidden>
                <label class=" control-label">Id</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
            </div>
          <?php }?>
            <div class="form-group">
                <label class="control-label" for="judul">Judul</label>
                <input class="form-control" name="judul" placeholder="Judul">
            </div>
            <div class="form-group">
                <label class="control-label" for="gambar">Gambar</label>
                <input type="file" name="gambar" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="keterangan">Keterangan</label>
                <textarea class="form-control" rows="5" name="keterangan" placeholder="Keterangan"></textarea>
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