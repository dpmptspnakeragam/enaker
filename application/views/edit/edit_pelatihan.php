<?php foreach ($pelatihan->result() as $row) {
?>
  <div class="modal fade" id="EditPelatihan<?php echo $row->id_pelatihan; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalPelatihanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">Edit Pelatihan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" action="<?= base_url(); ?>admin/pelatihan/ubah" method="post" enctype="multipart/form-data">
            <div hidden class="form-group">
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id_pelatihan" value="<?php echo $row->id_pelatihan; ?>">
            </div>
            <div class="form-group">
              <label for="pelatihan">Pelatihan</label>
              <input class="form-control" name="pelatihan" placeholder="Pelatihan" value="<?php echo $row->pelatihan; ?>" required>

            </div>
            <div class="form-group">
              <label for="persyaratan">Persyaratan</label>
              <textarea id="edit_syaratpelatihan" rows="5" class="form-control" name="persyaratan" required><?php echo $row->persyaratan; ?></textarea>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label for="tl_lahir">Jadwal Pelatihan</label>
                <div class="form-inline">
                  <input type="date" class="form-control" name="tgl_awal" placeholder="Tanggal Awal" value="<?php echo $row->tgl_awal; ?>" required> sampai
                  <input type="date" class="form-control" name="tgl_akhir" placeholder="Tanggal Akhir" value="<?php echo $row->tgl_akhir; ?>" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="tahun">Periode Tahun</label>
              <input class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $row->tahun; ?>" required>
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
              <label for="status">Status</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status" value="BUKA">
                <label class="form-check-label" for="status">
                  Buka
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status" value="TUTUP">
                <label class="form-check-label" for="status">
                  Tutup
                </label>
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