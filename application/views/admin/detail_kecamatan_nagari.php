<?php 
session_start();
if(!isset($_SESSION['username'])) {
header("location:../login.php"); 
}
require_once("../koneksi.php");
include '../model/database_pencaker.php';
$db = new database();
?>
<?php
require '../koneksi.php';
$nagari=$_GET['nagari'];
    $sql = pg_query("SELECT * FROM nagari2 where id_nagari2='$nagari'");
    while ($row =  pg_fetch_array($sql)){
        $nagari=$row['nama_nagari2'];
        $id_nagari2=$row['id_nagari2'];
    }
?>

<?php include ("../head.php")?>
<?php include ("../style/nav.php")?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">P2K2</li>
                <li class="breadcrumb-item active" aria-current="page">Data Pencari Kerja</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Pencari Kerja <br>Nagari "<?php echo $nagari; ?>"</h3>
			<hr>
			<div class="panel-heading">
                <div class="alert alert-primary" role="alert">
            <h6>Total Data Pencari Kerja di Nagari <?php echo $nagari; ?> :
                  <?php
                    $jumlahkan = "SELECT count(*) AS jumlah_total FROM penganggur where nagari=$id_nagari2"; 
                    $hasil =pg_query($jumlahkan);
                    $t = pg_fetch_array($hasil); 
                    echo "<b>" . number_format($t['jumlah_total']) . " Orang</b>";
                    ?>
            </h6></div><hr>
    </div><br>
            <!-- start: Accordion -->
            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="2000px">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="auto">No</th>
                                            <th class="text-center" width="auto">Nama</th>
                                            <th class="text-center" width="auto">JK</th>
                                            <th class="text-center" width="auto">Tempat Lahir</th>
                                            <th class="text-center" width="auto">Tanggal Lahir</th>
                                            <th class="text-center" width="auto">Umur</th>
                                            <th class="text-center" width="auto">NIK</th>
                                            <th class="text-center" width="auto">Alamat Tetap</th>
                                            <th class="text-center" width="auto">No. HP / Telp.</th>
                                            <th class="text-center" width="auto">Pendidikan Terakhir</th>
                                            <th class="text-center" width="auto">Pekerjaan Yang Diinginkan</th>
                                            <th class="text-center" width="auto">Keterampilan Yang dimiliki</th>
                                            <th class="text-center" width="auto">Pelatihan Yang Diinginkan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php
                                                 include '../koneksi.php';
                                                 include '../tglindo.php';
                                                 $sql="select * From penganggur 
                                                 join pengguna on penganggur.nagari=pengguna.id_nagari2
                                                 join nagari on penganggur.kecamatan=nagari.id_nagari
                                                 join nagari2 on penganggur.nagari=nagari2.id_nagari2
                                                 where nagari='$id_nagari2'";

                                                    $hasil=pg_query($sql);
                                                    $no_urut = 0;
                                                    while($row = pg_fetch_array($hasil)){
                                                    $no_urut++;
                                                    $id_penganggur=$row['id_penganggur'];
                                                    $nama_lengkap=$row['nama_lengkap'];
                                                    $jk=$row['jk'];
                                                    $tmpt_lahir=$row['tmpt_lahir'];
                                                    $tgl_lahir=$row['tgl_lahir'];
                                                    $umur=$row['umur'];
                                                    $nik=$row['nik'];
                                                    $jorong=$row['jorong'];
                                                    $nagari=$row['nagari'];
                                                    $kecamatan=$row['kecamatan'];
                                                    $phone=$row['phone'];
                                                    $pendidikan=$row['pendidikan'];
                                                    $pekerjaan=$row['pekerjaan'];
                                                    $keterampilan=$row['keterampilan'];
                                                    $pelatihan=$row['pelatihan'];
                                                    $nama_nagari2=$row['nama_nagari2'];
                                                    $nama_nagari=$row['nama_nagari'];
                                                    ?>
                                        <tr >
                                            <td><?php echo "$no_urut"; ?></td>
                                            <td><?php echo "$nama_lengkap"; ?></td>
                                            <td><?php echo "$jk"; ?></td>
                                            <td><?php echo "$tmpt_lahir"; ?></td>
                                            <td><?php echo TanggalIndo($tgl_lahir); ?></td>
                                            <td><?php echo "$umur"; ?></td>
                                            <td><?php echo "$nik"; ?></td>
                                            <td><?php echo "$jorong"; ?>, Nagari <?php echo "$nama_nagari2"; ?>, Kecamatan <?php echo "$nama_nagari"; ?></td>
                                            <td><?php echo "$phone"; ?></td>
                                            <td><?php echo "$pendidikan"; ?></td>
                                            <td><?php echo "$pekerjaan"; ?></td>
                                            <td><?php echo "$keterampilan"; ?></td>
                                            <td><?php echo "$pelatihan"; ?></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>   <hr>
              <!--end: Accordion -->
              </div>
        	</div>
		</div>
	</div>
</div>
</main>
