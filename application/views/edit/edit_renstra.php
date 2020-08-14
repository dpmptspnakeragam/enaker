<?php foreach ($data_perencanaan->result() as $row) {
?>
  <div class="modal fade" id="EditRenstra<?php echo $row->id_renstra; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalAturanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header Bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">Edit Aturan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" action="<?= base_url(); ?>admin/peraturan/ubah_data_perencanaan" method="post" enctype="multipart/form-data" disabled>
            <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->id_renstra; ?>">
            </div>
            <div class="form-group">
              <label for="nama_renstra">Nama Peraturan</label>
              <input readonly class="form-control" name="nama_renstra" placeholder="Nama Peraturan" value="<?php echo $row->nama_renstra; ?>" required>

            </div>
            <div class="form-group">
              <label for="file">File</label>
              <input type="file" name="file" id="file">
              <input name="old" type="hidden" id="old" value="<?php echo $row->file; ?>" />
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