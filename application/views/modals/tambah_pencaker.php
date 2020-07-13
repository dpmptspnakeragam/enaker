<div class="modal fade" id="ModalPencaker" tabindex="-1" role="dialog" aria-labelledby="ModalPencaker" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pencari Kerja</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="<?= base_url(); ?>admin/pencaker/tambah"method="post"  enctype="multipart/form-data">
      <?php  foreach ( $idmax->result() as $row ) {
      ?>
          <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?= $row->idmax+1;?>">
          </div>
      <?php } ?>
          <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama">
          </div>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select required name="jk"class="form-control">
          <option>L</option>
          <option>P</option>
          </select>
          </div>
          <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir">
          </div>
          <div class="row">
          <div class="form-group  col-lg-3">
              <label>Tanggal Lahir</label>
              <input  id="tanggallahir" type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div></div>
          <div class="form-group">
              <label>Umur</label>
              <input id="umur" type="text" class="form-control" name="umur" placeholder="Umur">
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control"  name="nik" placeholder="Nomor Induk Kependudukan">
          </div>
          <div class="form-group">
              <label>Alamat</label>
          <select id="kecamatan" name="kecamatan" class="form-control">
            <option value="">Pilih Kecamatan</option>
            <?php  foreach ( $kecamatan as $row2 ) {
            ?>
              <option value="<?php echo $row2->id_nagari; ?>">
                <?php echo $row2->nama_nagari; ?>
              </option>
            <?php
            }
            ?>
          </select>
            <select id="nagari" name="nagari" class="form-control">
            <option value="">Pilih Nagari</option>
            <?php  foreach ( $nagari as $row3 ) {
            ?>
              <option class="<?php echo $row3->id_nagari; ?>" value="<?php echo $row3->id_nagari2; ?>">
                <?php echo $row3->nama_nagari2; ?>
              </option>
            <?php
            }
            ?>
          </select>
              <input type="text" class="form-control" name="jorong" placeholder="Jorong">
          </div>
          <div class="form-group">
              <label>No. HP / Telp</label>
              <input type="text" class="form-control" name="phone"placeholder="Nomor HP / Telp" >
          </div>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <select required name="pendidikan"class="form-control">
          <option>Tidak Tamat SD</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA/MA</option>
          <option>SMK</option>
          <option>D1</option><option>D2</option><option>D3</option>
          <option>D4</option><option>S1</option>
          </select>
          </div>        
         <div class="form-group">
              <label>Jurusan Pendidikan</label>
              <input type="text" class="form-control" name="jurusan" placeholder="Jurusan Pendidikan">
          </div>
         <div class="form-group">
              <label>Pekerjaan Yang Diinginkan</label>
              <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
          </div>
         <div class="form-group">
              <label>Keterampilan Yang Dimiliki</label>
              <input type="text" class="form-control" name="keterampilan" placeholder="Keterampilan">
          </div>
         <div class="form-group">
              <label>Pelatihan Yang Diinginkan</label>
              <select id="pelatihan" name="pelatihan" class="form-control">
                <option value="">Pilih Pelatihan</option>
                <?php  foreach ( $pelatihan as $row4 ) {
                ?>
                  <option value="<?php echo $row4->id_pelatihan; ?>">
                    <?php echo $row4->pelatihan; ?>
                  </option>
                <?php
                }
                ?>
            </select>
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
<script src="<?= base_url(); ?>assets/jquery-1.10.2.min.js"></script>
<script src="<?= base_url(); ?>assets/jquery.chained.min.js"></script>
<script>
    $("#nagari").chained("#kecamatan");
</script>
<script>
        $(function() {
            $( "#tanggallahir" ).datepicker();
        });
 
        window.onload=function(){
            $('#tanggallahir').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
</script>
