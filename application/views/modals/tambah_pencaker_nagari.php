<script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
 
        window.onload=function(){
            $('#datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
 
    </script>
<?php
require '../koneksi.php';
$nama=$_SESSION['nama'];
    $sql = pg_query("SELECT * FROM nagari2 where nama_nagari2='$nama'");
    while ($row =  pg_fetch_array($sql)){
        $nama=$row['nama_nagari2'];
        $id_nagari2=$row['id_nagari2'];
		$id_nagari=$row['id_nagari'];
    }
?>
<div class="modal fade" id="ModalPencaker" tabindex="-1" role="dialog" aria-labelledby="ModalPencaker" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pencari Kerja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="../controller/aksi_pencaker.php?aksi=tambah"method="post"  enctype="multipart/form-data">
      <?php 
          include '../koneksi.php';
          $query = pg_query("SELECT MAX(id_penganggur) AS id FROM penganggur");
          $result = pg_fetch_array($query);
          $idmax = $result['id'];
          if ($idmax==null) {$idmax=1;}
          else {$idmax++;}
      ?>
          <div class="form-group" hidden>
              <label>Id</label>
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $idmax;?>">
          </div>
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
              <input  id="datepicker" type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div></div>
          <div class="form-group">
              <label>Umur</label>
              <input id="umur" type="text" class="form-control" name="umur" placeholder="20">
          </div>
          <div class="form-group">
              <label>NIK</label>
              <input type="text" class="form-control"  name="nik" placeholder="Nomor Induk Kependudukan">
          </div>
          <div class="form-group">
              <label>Alamat</label>
            <?php
            $query = pg_query("SELECT * FROM nagari where id_nagari='$id_nagari' ");
            while ($row = pg_fetch_array($query)) {
		?>
		<option type="text" class="form-control"  name="kecamatan" value="<?php echo $row['id_nagari']; ?>"><?php echo $row['nama_nagari']; ?></option>
		<?php
		}
		?>
              <option id="nagari" class="form-control" name="nagari" value="<?php echo $id_nagari2; ?>">
                <?php echo $nama; ?>
              </option>  
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
              <input type="text" class="form-control" name="pelatihan" placeholder="Pelatihan">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="../style/jquery.chained.min.js"></script>
<script>
    $("#nagari").chained("#kecamatan");
</script>