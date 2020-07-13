<?php foreach ( $session as $row ) {} ?>
<div class="modal fade" id="ModalFilterUmurKecamatan" tabindex="-1" role="dialog" aria-labelledby="ModalFilterUmur" aria-hidden="true">
  <div class="modal-dialog modal-lg shadow" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h5 class="modal-title" id="exampleModalLabel">Filter Pencari Kerja Berdasarkan Umur</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?php echo base_url()?>admin/pencaker/cetak_filter_umur_enaker" method="post" enctype="multipart/form-data">
          <div class="row">
              <div class="form-group" hidden>
              <input type="text" class="form-control" id="id_kecamatan" name="id_kecamatan" value="<?php echo $row->id_nagari;?>">
              </div>
            <div class="form-group col-lg-4">
              <label for="umur">Umur</label>
              <div class="form-group">
                  <label>Dari</label>
                  <input class="form-control" type="text" name="umurdari" id="umur">
                  <label>Sampai</label>
                  <input class="form-control" type="text" name="umursampai" id="umur">
                </div>
            </div>
            <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select required name="jk"class="form-control">
              <option>L</option>
              <option>P</option>
              </select>
              </div>
            </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-download"></i> Unduh</button>
      </div>
      </form>
    </div>
  </div>
</div>