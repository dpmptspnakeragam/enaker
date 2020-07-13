<div class="modal fade" id="ModalSaranaHI" tabindex="-1" role="dialog" aria-labelledby="ModalSaranaHI" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sarana HI</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/sarana_hi/tambah"method="post"  enctype="multipart/form-data">
        <?php  foreach ( $idmax->result() as $row ) {
        ?>
            <div class="form-group" hidden>
                <label class=" control-label">Id</label>
                <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
            </div>
          <?php } ?>
        <div class="form-group">
            <label class="control-label" for="nama_perusahaan">Nama Perusahaan</label>
            <input class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="jmlh_pekerja">Jumlah Tenaga Kerja</label>
            <input class="form-control" name="jmlh_pekerja" placeholder="Jumlah Pekerja" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="bpjs">BPJS</label>
            <input class="form-control" name="bpjs" placeholder="Jumlah Peserta BPJS" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="serikat">Serikat Pekerja </label>
            <label class="radio">
              <input type="radio" name="serikat" id="optionsRadiosInline1" value="Ada"> Ada
            </label>
            <label class="radio">
              <input type="radio" name="serikat" id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
            </label>
            </div>
        <div class="form-group">
            <label class="control-label" for="pp">PP</label>
            <label class="radio">
              <input type="radio" name="pp" id="optionsRadiosInline1" value="Ada"> Ada
            </label>
            <label class="radio">
              <input type="radio" name="pp" id="optionsRadiosInline2" value="Tidak Ada"> Tidak ada
            </label>
            </div>
        <div class="form-group">
            <label class="control-label" for="pkb">PKB</label>
            <label class="radio">
              <input type="radio" name="pkb" id="optionsRadiosInline1" value="Ada"> Ada
            </label>
            <label class="radio">
              <input type="radio" name="pkb" id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
            </label>
        </div>
        <div class="form-group">
            <label class="control-label" for="lks">LKS Bipartit </label>
            <label class="radio">
              <input type="radio" name="lks" id="optionsRadiosInline1" value="Ada" > Ada
            </label>
            <label class="radio">
              <input type="radio" name="lks" id="optionsRadiosInline2" value="Tidak Ada"> Tidak Ada
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