<div class="modal fade" id="ModalPesertaMagang" tabindex="-1" role="dialog" aria-labelledby="ModalPesertaMagang" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title " id="exampleModalLabel">Pendaftaran Peserta Magang</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/peserta_magang/tambah" method="post"  enctype="multipart/form-data">
      <?php  foreach ( $idmax->result() as $row ) {
      ?>
          <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->idmax+1; ?>">
          </div>
      <?php } ?>
          <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control" name="nama_peserta" placeholder="Nama Peserta" maxlength="20" required>
              
          </div>
          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" name="alamat" placeholder="Alamat" maxlength="100" required>
          </div>
          <div class="form-group">
              <label for="no_ktp">No. KTP</label>
              <input class="form-control" name="no_ktp" placeholder="No. KTP" maxlength="15" required>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label>Jenis Kelamin</label>
              <select required name="jenis_kelamin"class="form-control">
          <option>Laki-Laki</option>
          <option>Perempuan</option>
          </select>
          </div></div>
          <div class="form-group">
              <label for="no_ktp">Tempat Lahir</label>
              <input class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir" maxlength="50" required>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label for="no_ktp">Tanggal Lahir</label>
              <input  type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required>
          </div></div>
          <div class="form-group">
              <label for="no_hp">No. HP</label>
              <input class="form-control" name="no_hp" placeholder="No. HP" maxlength="12" required>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label>Pendidikan Terakhir</label>
              <select required name="pendidikan"class="form-control">
              <option>Tidak Sekolah</option>
              <option>SD / Sederajat</option>
              <option>SMP / Sederajat</option>
              <option>SMA / Sederajat</option>
              <option>D1 / D2 / D3 </option>
              <option>S1 / S2 / S3 </option>
              </select>
          </div></div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label class="control-label" for="id_jenis">Program Magang</label>
              <select required name="magang"class="form-control">
              <?php  foreach ( $jenis_magang->result() as $row ) {
              ?>
                <option value="<?php $row->id_magang; ?>"><?php $row->judul; ?></option>
              <?php } ?>
              </select>
          </div></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>