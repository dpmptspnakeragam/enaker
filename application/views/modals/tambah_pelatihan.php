<div class="modal fade" id="ModalPelatihan" tabindex="-1" role="dialog" aria-labelledby="ModalPelatihanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelatihan</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?= base_url(); ?>admin/pelatihan/tambah" method="post" enctype="multipart/form-data">
        <?php  foreach ( $idmax->result() as $row ) {
        ?>
                <div hidden class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
                </div>
        <?php } ?>
                <div class="form-group">
                    <label for="pelatihan">Pelatihan</label>
                    <input class="form-control" name="pelatihan" placeholder="Pelatihan" required>
                    
                </div>
                <div class="form-group">
                    <label for="persyaratan">Tentang Peraturan</label>
                    <textarea class="form-control" name="persyaratan" rows="3" placeholder="Syarat" required></textarea>
                </div>
                    <div class="row">
                    <div class="form-group col-lg-8">
                    <label for="tl_lahir">Jadwal Pelatihan</label>
                    <div class="form-inline">
                    <input  type="date" class="form-control" name="tgl_awal" placeholder="Tanggal Awal" required> sampai 
                    <input  type="date" class="form-control" name="tgl_akhir" placeholder="Tanggal Akhir" required>
                </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="tahun">Periode Tahun</label>
                    <input class="form-control" name="tahun" placeholder="Tahun" required></input>
                </div>
                <div class="form-group">
                    <label for="gambar">File</label>
                    <input type="file" name="gambar">
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