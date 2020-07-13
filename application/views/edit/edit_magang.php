<?php if($pemagangan == null){

} else { 

foreach ($pemagangan->result() as $row) {
?>
<div class="modal fade" id="EditMagang<?php echo $row->id_magang; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalProfilLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Magang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form role="form" action="<?= base_url(); ?>admin/pemagangan/ubah"method="post"  enctype="multipart/form-data">
          <div class="form-group" hidden>
              <label class=" control-label">Id</label>
              <input type="text" class="form-control" id="id" name="id_magang" value="<?php echo $row->id_magang;?>">
          </div>
          <div class="form-group">
              <label class="control-label" for="judul">Judul</label>
              <input class="form-control" name="judul" placeholder="Judul" value="<?php echo $row->judul;?>">
          </div>
          <div class="form-group">
              <label class="control-label" for="keterangan">Keterangan</label>
              <textarea rows="5" class="form-control" name="keterangan" placeholder="Keterangan" value="<?php echo $row->keterangan;?>"><?php echo $row->keterangan;?></textarea>
          </div>
          <div class="row">
          <div class="form-group">
              <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Gambar</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60'/>
          <input name="gambar" type="file" id="gambar" />
              <input name="old" type="hidden" id="old" value="<?php echo $row->gambar;?>" />
          </div>
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
<?php }} ?>