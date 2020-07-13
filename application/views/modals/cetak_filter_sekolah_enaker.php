<div class="modal fade" id="ModalFilterSekolah" tabindex="-1" role="dialog" aria-labelledby="ModalFilterSekolah" aria-hidden="true">
  <div class="modal-dialog modal-lg shadow" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h5 class="modal-title" id="exampleModalLabel">Filter Bursa Kerja Khusus Berdasarkan Sekolah</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/bursa_khusus/cetak" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-lg-4">
              <label for="umur">Sekolah</label>
               <select required name="sekolah" class="form-control">
              <?php  foreach ($sekolah->result() as $row ) {
              ?>
                <option value="<?= $row->nama_sekolah; ?>"><?= $row->nama_sekolah; ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
                  <label>Tahun</label>
                  <input class="form-control" name="tahun" placeholder="Tahun" required>
              </div>
            </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Unduh</button>
      </div>
      </form>
    </div>
  </div>
</div>