<?php foreach($saranahi->result() as $row) {
?>
<div class="modal fade" id="EditSaranaHI<?php echo $row->id_sarana; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalSaranaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form role="form" action="<?= base_url(); ?>admin/sarana_hi/ubah"method="post"  enctype="multipart/form-data">
          <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id_sarana" value="<?php echo $row->id_sarana;?>">
          </div>
          <div class="form-group">
              <label class="control-label" for="nama_perusahaan">Nama Perusahaan</label>
              <input class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $row->nama_perusahaan;?>" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="jmlh_pekerja">Jumlah Tenaga Kerja</label>
            <input class="form-control" name="jmlh_pekerja" placeholder="Jumlah Pekerja" value="<?php echo $row->jmlh_pekerja;?>" required>
          </div>
          <div class="form-group">
              <label class="control-label" for="bpjs">BPJS</label>
              <input class="form-control" name="bpjs" placeholder="Jumlah Peserta BPJS" value="<?php echo $row->bpjs;?>" required>
          </div>
          <div class="form-group" value="<?php echo $row->serikat;?>">
              <label class="control-label" for="serikat">Serikat Pekerja </label>
              <label class="radio">
                <input type="radio" name="serikat" <?php if (isset($row->serikat) && $row->serikat=="Ada") echo "checked";?> id="optionsRadiosInline1" value="Ada"> Ada
              </label>
              <label class="radio">
                <input type="radio" name="serikat" <?php if (isset($row->serikat) && $row->serikat=="Tidak Ada") echo "checked";?> id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
              </label>
              </div>
          <div class="form-group" value="<?php echo $row->pp;?>">
              <label class="control-label" for="pp">PP</label>
              <label class="radio">
                <input type="radio" name="pp" <?php if (isset($row->pp) && $row->pp=="Ada") echo "checked";?> id="optionsRadiosInline1" value="Ada"> Ada
              </label>
              <label class="radio">
                <input type="radio" name="pp" <?php if (isset($row->pp) && $row->pp=="Tidak Ada") echo "checked";?> id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
              </label>
              </div>
          <div class="form-group" value="<?php echo $row->pkb;?>">
              <label class="control-label" for="pkb">PKB</label>
              <label class="radio">
                <input type="radio" name="pkb" <?php if (isset($row->pkb) && $row->pkb=="Ada") echo "checked";?> id="optionsRadiosInline1" value="Ada"> Ada
              </label>
              <label class="radio">
                <input type="radio" name="pkb" <?php if (isset($row->pkb) && $row->pkb=="Tidak Ada") echo "checked";?> id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
              </label>
              </div>
              <div class="form-group" value="<?php echo $row->lks;?>">
                <label class="control-label" for="lks">LKS Bipartit </label>
              <label class="radio">
                <input type="radio" name="lks" <?php if (isset($row->lks) && $row->lks=="Ada") echo "checked";?> id="optionsRadiosInline1" value="Ada" > Ada
              </label>
              <label class="radio">
                <input type="radio" name="lks" <?php if (isset($row->lks) && $row->lks=="Tidak Ada") echo "checked";?> id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
              </label>
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