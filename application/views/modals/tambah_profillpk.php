<div class="modal fade" id="ModalProfilLPK" tabindex="-1" role="dialog" aria-labelledby="ModalProfilLPK" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Lembaga Pelatihan Kerja</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url(); ?>admin/profil_lpk/tambah" method="post" enctype="multipart/form-data">
          <?php foreach ($idmax->result() as $row) {
          ?>
            <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax + 1; ?>">
            </div>
          <?php } ?>
          <div class="form-group">
            <label class="control-label" for="nama_lembaga">Nama Lembaga</label>
            <input class="form-control" name="nama_lpk" placeholder="Nama Lembaga" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="alamat">Alamat</label>
            <input class="form-control" name="alamat" placeholder="Alamat" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="pengurus">Pengurus</label>
            <input class="form-control" name="pengurus" placeholder="Pengurus" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="sejarah">Sejarah</label>
            <textarea rows="3" class="form-control" name="sejarah" placeholder="Sejarah"></textarea>
          </div>
          <div class="form-group">
            <label class="control-label" for="gambar">Gambar</label>
            <input type="file" name="gambar" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="sejarah">Jumlah Yang Dilatih</label>
            <input type="text" class="form-control" name="jumlah_latih" placeholder="Jumlah Yang Dilatih 1 Tahun Terakhir">
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