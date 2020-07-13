<?php  foreach ( $peraturan->result() as $row ) {
?>
<div class="modal fade" id="EditAturan<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="ModalAturanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Aturan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url(); ?>admin/peraturan/ubah" method="post"  enctype="multipart/form-data" disabled>
                <div class="form-group" hidden>
                    <label>Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
                </div>
                <div class="form-group">
                    <label for="nama_peraturan">Judul Peraturan</label>
                    <input class="form-control" name="nama_peraturan" placeholder="Nama Peraturan" value="<?php echo $row->nama_peraturan;?>" required>
                </div>
                <div class="form-group">
                    <label for="isi_peraturan">Tentang Peraturan</label>
                    <input class="form-control" name="isi_peraturan" placeholder="Tentang Peraturan" value="<?php echo $row->isi_peraturan;?>" required>
                </div>
               <div class="form-group">
                    <label for="peraturan">File</label>
                    <input name="peraturan" type="file" id="peraturan" />
                    <input name="old" type="hidden" id="old" value="<?php echo $row->peraturan;?>" />
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
