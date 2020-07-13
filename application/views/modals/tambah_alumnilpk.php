<div class="modal fade" id="ModalAlumniLPK" tabindex="-1" role="dialog" aria-labelledby="ModalAlumniLPK" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Alumni LPK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/alumni_lpk/tambah" method="post"  enctype="multipart/form-data" disabled>
          <?php  foreach ( $idmax->result() as $row ) {
          ?>
          <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
          </div>
        <?php }?>
          <div class="form-group">
              <label for="nama_alumni">Nama</label>
              <input class="form-control" name="nama_alumni" placeholder="Nama Alumni">
              
          </div>
          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
              <label for="tp_lahir">Tempat Lahir</label>
              <input class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir">
          </div>
          <div class="row">
          <div class="form-group col-lg-3">
              <label for="tl_lahir">Tanggal Lahir</label>
              <input  type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div></div>
          <div class="form-group">
              <label for="phone">No. HP</label>
              <input class="form-control" name="phone" placeholder="No.HP">
          </div>
          <div class="form-group">
              <label for="pekrejaan">Pekerjaan</label>
              <input class="form-control" name="pekerjaan" placeholder="Pekerjaan">
          </div>
          <div class="form-group">
              <label for="perusahaan">Perusahaan</label>
              <input class="form-control" name="perusahaan" placeholder="Perusahaan">
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