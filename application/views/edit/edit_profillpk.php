<?php foreach ($profillpk->result() as $row) {
?>
  <div class="modal fade" id="EditProfilLPK<?php echo $row->id_profil; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalProfilLPKLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profil LPK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" action="<?= base_url(); ?>admin/profil_lpk/ubah" method="post" enctype="multipart/form-data">
            <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id_profil" value="<?php echo $row->id_profil; ?>">
            </div>
            <div class="form-group">
              <label class="control-label" for="nama_lembaga">Nama Lembaga</label>
              <input class="form-control" name="nama_lpk" placeholder="Nama Lembaga" value="<?php echo $row->nama_lpk; ?>" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="alamat">Alamat</label>
              <input class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat; ?>" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="pengurus">Pengurus</label>
              <input class="form-control" name="pengurus" placeholder="Pengurus" value="<?php echo $row->pengurus; ?>" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="sejarah">Sejarah</label>
              <textarea rows="5" class="form-control" name="sejarah" placeholder="Sejarah"><?php echo $row->sejarah; ?></textarea>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Gambar</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60' />
                  <input name="gambar" type="file" id="gambar" />
                  <input name="old" type="hidden" id="old" value="<?php echo $row->gambar; ?>" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="alamat">Jumlah Yang Dilatih</label>
              <input class="form-control" name="jumlah_latih" placeholder="Jumlah Yang Dilatih" value="<?php echo $row->jumlah_latih; ?>" required>
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