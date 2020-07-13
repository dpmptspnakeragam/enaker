<?php  foreach ( $peserta_blk->result() as $row ) {
?>
<div class="modal fade" id="EditPesertaBLK<?= $row->id_peserta;?>" tabindex="-1" role="dialog" aria-labelledby="ModalPesertaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Peserta BLK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form role="form" action="<?= base_url(); ?>admin/peserta_blk/ubah"method="post"  enctype="multipart/form-data" >
          <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id_peserta" value="<?= $row->id_peserta;?>">
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label>Keterangan Kelulusan</label>
              <select required name="ket" class="form-control">
          <option value="<?= $row->ket; ?>" selected><?= $row->ket; ?></option>
          <option>LULUS</option>
          <option>TIDAK LULUS</option>
          </select>
          </div></div>
          <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control" name="nama_peserta" placeholder="Nama Peserta" value="<?= $row->nama_peserta;?>" required>
              
          </div>
          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" name="alamat" placeholder="Alamat" value="<?= $row->alamat;?>" required>
          </div>
          <div class="form-group">
              <label for="no_ktp">No. KTP</label>
              <input class="form-control" name="no_ktp" placeholder="No. KTP" value="<?= $row->no_ktp;?>" required>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label>Jenis Kelamin</label>
              <select required name="jenis_klamin"class="form-control" value="<?= $row->jenis_klamin;?>">
              <option value="<?= $row->jenis_klamin;?>" selected><?= $row->jenis_klamin;?></option>
              <option>Laki-Laki</option>
              <option>Perempuan</option>
              </select>
          </div></div>
          <div class="form-group">
              <label for="no_ktp">Tempat Lahir</label>
              <input class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir" value="<?= $row->tmpt_lahir;?>"required>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label for="no_ktp">Tanggal Lahir</label>
              <input  type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $row->tgl_lahir;?>" required>
          </div></div>
          <div class="form-group">
              <label for="no_hp">No. HP</label>
              <input class="form-control" name="no_hp" placeholder="No. HP" value="<?= $row->no_hp;?>" required>
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label>Pendidikan Terakhir</label>
              <select required name="pendidikan" class="form-control" value="<?= $row->pendidikan;?>" onchange="">
              <option selected><?= $row->pendidikan;?></option>
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
              <label class="control-label" for="id_jenis">Program Pelatihan</label>
              <select required name="pelatihan" class="form-control" >
                  <option value="<?= $row->id_pelatihan;?>"><?= $row->pelatihan;?></option>
                <?php  foreach ( $jenis_pelatihan->result() as $row ) {
                ?>
                  <option value="<?= $row->id_pelatihan;?>"><?= $row->pelatihan;?></option>
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
<?php } ?>