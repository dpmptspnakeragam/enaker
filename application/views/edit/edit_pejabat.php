<?php  foreach ( $penjabat->result() as $row ) {
?>
<div class="modal fade" id="EditPejabat<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalProfilLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pejabat</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/profil/ubah_pejabat" method="post"  enctype="multipart/form-data">
        <div class="form-group" hidden>
            <label class=" control-label">Id</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="nama">Nama</label>
            <input class="form-control" name="nama" placeholder="Nama" value="<?php echo $row->nama;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="nip">NIP</label>
            <input class="form-control" name="nip" placeholder="NIP" value="<?php echo $row->nip;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="jabatan">Jabatan</label>
            <input class="form-control" name="jabatan" placeholder="Jabatan" value="<?php echo $row->jabatan;?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="cp">CP</label>
            <input class="form-control" name="cp" placeholder="CP" value="<?php echo $row->cp;?>">
        </div>
        <div class="form-group">
        <label class="control-label" for="golongan">Golongan</label>
        <select required name="golongan" class="form-control"  onchange="">
          <option>IV/e</option><option>IV/d</option><option>IV/c</option><option>IV/b</option><option>IV/a</option>
          <option>III/d</option><option>III/c</option><option>III/b</option><option>III/a</option>
          <option>II/d</option><option>II/c</option><option>II/b</option><option>II/a</option>
          <option>I/d</option><option>I/c</option><option>I/b</option><option>I/a</option>
          <option>PTT</option><option>Kontrak</option><option>THL</option>
          </select>
        </div>
        <div class="row">
        <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="gambar">Foto</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="<?php base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" width='80' height='60'/>
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
<?php } ?>
