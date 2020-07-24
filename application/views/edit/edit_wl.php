<?php foreach ($wl_naker->result() as $row) {
?>
  <div class="modal fade" id="EditPerusahaan<?php echo $row->id_perusahaan; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalPerusahaanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">Edit Wajib Lapor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" action="<?= base_url(); ?>admin/wajib_lapor_loker/ubah" method="post" enctype="multipart/form-data">
            <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id_perusahaan" value="<?php echo $row->id_perusahaan; ?>">
            </div>
            <div class="form-group">
              <label for="nama_perusahaan">Nama Perusahaan</label>
              <input class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $row->nama_perusahaan; ?>" required>

            </div>
            <div class="form-group">
              <label for="posisi">Posisi</label>
              <input class="form-control" name="posisi" placeholder="Posisi" value="<?php echo $row->posisi; ?>" required>
            </div>
            <div class="form-group">
              <label for="penempatan">Penempatan</label>
              <input class="form-control" name="penempatan" placeholder="Penempatan" value="<?php echo $row->penempatan; ?>" required>
            </div>
            <div class="row">
              <div class="form-group col-lg-3">
                <label>Pendidikan Terakhir</label>
                <select required name="pendidikan" class="form-control" value="<?php echo $row->pendidikan; ?>">
                  <option value="<?php echo $row->pendidikan; ?>" selected><?php echo $row->pendidikan; ?></option>
                  <option>Tidak Sekolah</option>
                  <option>SD / Sederajat</option>
                  <option>SMP / Sederajat</option>
                  <option>SMA / Sederajat</option>
                  <option>D1 / D2 / D3 </option>
                  <option>S1 / S2 / S3 </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="usia">Usia Minimal</label>
              <input class="form-control" name="usia" placeholder="Usia" value="<?php echo $row->usia; ?>" required>
            </div>
            <div class="row">
              <div class="form-group col-lg-3">
                <label>Jenis Kelamin</label>
                <select required name="jenis_kelamin" class="form-control" value="<?php echo $row->jenis_kelamin; ?>">
                  <option value="<?php echo $row->jenis_kelamin; ?>" selected><?php echo $row->jenis_kelamin; ?></option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-3">
                <label for="status_karyawan">Status Karyawan</label>
                <select required name="status" class="form-control" value="<?php echo $row->status; ?>">
                  <option value="<?php echo $row->status; ?>" selected><?php echo $row->status; ?></option>
                  <option>PKWT</option>
                  <option>PKWTT</option>
                  <option>Harian</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="gaji">Gaji</label>
              <input class="form-control" name="gaji" placeholder="Masukan Angka" value="<?php echo $row->gaji; ?>" required>
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