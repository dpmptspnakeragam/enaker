<div class="modal fade" id="ModalAturan" tabindex="-1" role="dialog" aria-labelledby="ModalAturanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Aturan</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url(); ?>admin/peraturan/tambah" method="post"  enctype="multipart/form-data" disabled>
          <?php  foreach ( $idmax->result() as $row ) {
          ?>

                <div class="form-group" hidden>
                    <label>Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
                </div>
          <?php } ?> 
                <div class="form-group">
                    <label for="nama_peraturan">Judul Peraturan</label>
                    <input class="form-control" name="nama_peraturan" placeholder="Nama Peraturan" required>
                    
                </div>
                <div class="form-group">
                    <label for="isi_peraturan">Tentang Peraturan</label>
                    <input class="form-control" name="isi_peraturan" placeholder="Tentang Peraturan" required>
                </div>
                
                <div class="form-group">
                    <label for="peraturan">File</label>
                    <input type="file" name="peraturan" required>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="submit" value="Simpan"><i class="fa fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>