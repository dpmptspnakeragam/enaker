<div class="modal fade" id="ModalInfo" tabindex="-1" role="dialog" aria-labelledby="ModalInfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url(); ?>admin/informasi/tambah" method="post"  enctype="multipart/form-data">
          <?php  foreach ( $idmax->result() as $row ) {
          ?>
              <div class="form-group" hidden>
                  <label class=" control-label">Id</label>
                  <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
              </div>
          <?php } ?>
              <div class="form-group">
                  <label class="control-label" for="judul_berita">Judul Informasi</label>
                  <input class="form-control" name="judul_berita" placeholder="Judul Informasi" required>
              </div>
              <div class="form-group">
                  <label class="control-label" for="konten_berita">Ringkasan Informasi</label>
                  <input class="form-control" name="konten_berita" placeholder="Ringkasan Informasi">
              </div>
              <div class="form-group">
                  <label class="control-label" for="gambar">Gambar</label>
                  <input type="file" name="gambar">
              </div>
               <div class="form-group">
                  <label class="control-label" for="tanggal">Tanggal Berita</label>
                  <input class="form-control col-lg-3" type="date" name="tanggal_berita">
              </div>
              <div class="form-group">
                  <label class="control-label" for="isi_berita">Isi Informasi</label>
                  <textarea class="form-control" name="isi_berita" rows="10" required></textarea>
              </div>
              <div class="form-group">
                  <label class="control-label" for="syarat">Keterangan</label>
                  <textarea class="form-control" name="syarat" rows="3"></textarea>
              </div>
              <div class="form-group">
                  <label class="control-label" for="syarat">Link Terkait</label>
                  <input class="form-control" name="alamat"></textarea>
              </div>
              <div class="form-group">
                  <label class="control-label" for="id_jenis">Jenis Informasi</label>
                  <select required name="id_jenis" class="form-control">
                  <?php  foreach ( $jenis_berita->result() as $row ) {
                  ?>
                  <option value="<?= $row->id_jenis;?>"><?= $row->nama_jenis;?></option>;}
                  <?php }    ?>
                  </select>
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