<?php foreach ($profile->result() as $row) {
?>
  <div class="modal fade" id="EditProfilBLK<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalProfilBLKLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profil BLK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" action="<?= base_url(); ?>admin/profil_blk/ubah" method="post" enctype="multipart/form-data">
            <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->id; ?>">
            </div>
            <div class="form-group">
              <label for="gambaran_umum">Gambaran Umum</label>
              <textarea id="edit_gambaranblk" rows="5" class="form-control" name="gambaran_umum" required><?php echo $row->gambaran_umum; ?></textarea>
            </div>
            <div class="form-group">
              <label for="visi">Visi</label>
              <textarea id="edit_visiblk" rows="5" class="form-control" name="visi" required><?php echo $row->visi; ?></textarea>
            </div>
            <div class="form-group">
              <label for="mis">Misi</label>
              <textarea id="edit_misiblk" rows="5" class="form-control" name="misi" required><?php echo $row->misi; ?></textarea>
            </div>
            <div class="form-group">
              <label for="fungsi">Fungsi</label>
              <textarea id="edit_fungsiblk" rows="5" class="form-control" name="fungsi" required><?php echo $row->fungsi; ?></textarea>
            </div>
            <div class="form-group">
              <label for="tugas">Tugas</label>
              <textarea id="edit_tugasblk" rows="5" class="form-control" name="tugas" required><?php echo $row->tugas; ?></textarea>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Struktur Organisasi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60' />
                  <input name="gambar" type="file" id="gambar" />
                  <input name="old" type="hidden" id="old" value="<?php echo $row->gambar; ?>" />
                </div>
              </div>
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
<?php } ?>