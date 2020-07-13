<?php  foreach ( $bursa_khusus->result() as $row ) {
?>
<div class="modal fade" id="EditBK<?= $row->id_bk; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalBKLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Bursa Khusus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/bursa_khusus/ubah" method="post"  enctype="multipart/form-data">
        <div class="form-group" hidden>
            <label class=" control-label">Id</label>
            <input type="text" class="form-control" id="id" name="id_bk" value="<?php echo $row->id_bk;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="sekolah">Nama Sekolah</label>
            <select required name="sekolah" class="form-control">
                <option value="<?php echo $row->sekolah;?>" selected><?php echo $row->sekolah; ?></option>
              <?php  foreach ($sekolah->result() as $row2 ) {
              ?>
                <option value="<?= $row2->nama_sekolah; ?>"><?= $row2->nama_sekolah; ?></option>
              <?php } ?>
                </select>
        </div>
       <div class="form-group">
              <label class="control-label" for="lk">Jumlah Penempatan Alumni (Laki-laki)</label>
              <input class="form-control" name="lk" placeholder="Jumlah Laki-laki" value="<?= $row->lk;?>" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="pr">Jumlah Penempatan Alumni (Perempuan)</label>
              <input class="form-control" name="pr" placeholder="Jumlah Perempuan" value="<?php echo $row->pr;?>" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="instansi">Perusahaan / Instansi</label>
              <input class="form-control" name="instansi" placeholder="Nama Perusahaan / Instansi" value="<?php echo $row->instansi;?>" required>
          </div>
           <div class="form-group">
              <label class="control-label" for="tahun">Tahun</label>
              <input class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $row->tahun;?>" required>
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