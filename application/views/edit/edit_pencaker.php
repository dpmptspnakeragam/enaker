<?php 
foreach ( $tampil_nagari as $row ) {
?>
<div class="modal fade" id="EditPencaker<?php echo $row->id_penganggur;?>" tabindex="-1" role="dialog" aria-labelledby="ModalPencakerLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pencari Kerja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form role="form" action="../controller/aksi_pencaker.php?aksi=update"method="post"  enctype="multipart/form-data">
          <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id_penganggur" value="<?php echo $row->id_penganggur;?>">
          </div>
          <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama" value="<?php echo $row->nama_lengkap;?>">
          </div>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jk"class="form-control" value="<?php echo $row->jk;?>">
          <option value="<?php echo $row->jk; ?>" selected><?php echo $row->jk; ?></option>
          <option>P</option>
          </select>
          </div>
          <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir" value="<?php echo $row->tmpt_lahir;?>">
          </div>
          <div class="row">
          <div class="form-group  col-lg-3">
              <label>Tanggal Lahir</label>
              <input  id="datepicker" type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $row->tgl_lahir;?>">
          </div></div>
          <div class="form-group">
              <label>Umur</label>
              <input id="umur" type="text" class="form-control" name="umur" placeholder="20" value="<?php echo $row->umur;?>">
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control"  name="nik" placeholder="Nomor Induk Kependudukan" value="<?php echo $row->nik;?>">
          </div>
          <div class="form-group">
              <label>Alamat</label>
          <select id="kecamatan" name="kecamatan" class="form-control" value="<?php echo $row->kecamatan;?>" required>
            <?php  foreach ( $kecamatan as $row2 ) {}
              if ($row->kecamatan == $row2->id_nagari) 
              { ?>
              <option value="<?php echo $row2->id_nagari; ?>" selected><?php echo $row2->nama_nagari ?></option>
              <?php
              }
              else
              {
                ?>
              <option value="<?php echo $row2->id_nagari; ?>"><?php echo $row2->nama_nagari; ?></option>
              <?php
              }
              ?>
          </select>
                                <select id="nagari" name="nagari" class="form-control" value="<?php echo $nagari;?>" required>
            <option value="">Pilih Nagari</option>
            <?php
            foreach ( $nagari as $row3 ) {}
              if ($row->nagari == $row3->id_nagari2) 
              { ?>
              <option value="<?php echo $row3->id_nagari2; ?>" selected><?php echo $row3->nama_nagari2 ?></option>
              <?php
              }
              else
              {
                ?>
              <option value="<?php echo $row3->id_nagari2; ?>"><?php echo $row3->nama_nagari2; ?></option>
              <?php
              }?>
            
          </select>
              <input type="text" class="form-control" name="jorong" placeholder="Jorong" value="<?php echo $row->jorong;?>">
          </div>
          <div class="form-group">
              <label>No. HP / Telp</label>
              <input type="text" class="form-control" name="phone"placeholder="Nomor HP / Telp" value="<?php echo $row->phone;?>">
          </div>
          <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <select required name="pendidikan"class="form-control" value="<?php echo $row->pendidikan;?>">
          <option value="<?php echo $row->pendidikan; ?>" selected><?php echo $row->pendidikan; ?></option>
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
            <input type="text" class="form-control" name="jurusan" placeholder="Jurusan Pendidikan" value="<?php echo $row->jurusan;?>">
          </div>
         <div class="form-group">
            <label>Pekerjaan Yang Diinginkan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $row->pekerjaan;?>">
        </div>
         <div class="form-group">
            <label>Keterampilan Yang Dimiliki</label>
            <input type="text" class="form-control" name="keterampilan" placeholder="Keterampilan" value="<?php echo $row->keterampilan;?>">
        </div>
         <div class="form-group">
            <label>Pelatihan Yang Diinginkan</label>
            <select required name="pelatihan" class="form-control" >
                  <option value="<?php echo $row->pelatihan;?>"><?php echo $row->pelatihan;?></option>
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
<?php } ?>