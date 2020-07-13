<?php foreach ($kecamatan as $row) {} ?>
<div class="modal fade" id="ModalFilterPencakerEnaker" tabindex="-1" role="dialog" aria-labelledby="ModalFilterPencaker" aria-hidden="true">
  <div class="modal-dialog modal-lg shadow" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h5 class="modal-title" id="exampleModalLabel">Filter Pencari Kerja Berdasarkan Pelatihan Yang Diinginkan</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?php echo base_url()?>admin/pencaker/cetak_filter_pelatihan_enaker" method="POST" enctype="multipart/form-data">
          <div class="row">
              <div class="form-group" hidden>
              <input type="text" class="form-control" id="id_kecamatan" name="id_kecamatan" value="<?php echo $row->id_nagari;?>">
              </div>
            <div class="form-group col-lg-3">
            <label class="control-label" for="id_jenis">Program Pelatihan</label>
            <select required name="pelatihan"class="form-control">
              <?php  foreach ( $pelatihan->result() as $row2 ) { ?>
                  <option value="<?= $row2->pelatihan; ?>"><?= $row2->pelatihan; ?></option>
              <?php } ?> 
            </select>
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