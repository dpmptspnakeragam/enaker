<?php 
session_start();
if(!isset($_SESSION['username'])) {
header("location:../login.php"); 
}
require_once("../koneksi.php");
?>
<?php
require '../koneksi.php';
$username=$_SESSION['username'];
    $sql = pg_query("SELECT * FROM pengguna where username='$username'");
    while ($row =  pg_fetch_array($sql)){
        $nama=$row['nama'];
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
			<h3 class="text-center">Data Pencari Kerja <br>Nagari "<?php echo $nama; ?>"</h3>
			<hr>
			<div class="panel-heading">
                <div class="alert alert-primary" role="alert">
                <h6>Total Data Pencari Kerja di Nagari <?php echo $nama; ?> :
                  <?php
                    $jumlahkan = "SELECT count(*) AS jumlah_total FROM penganggur where nagari=$id_nagari2"; 
                    $hasil =pg_query($jumlahkan);
                    $t = pg_fetch_array($hasil); 
                    echo "<b>" . number_format($t['jumlah_total']) . " Orang</b>";
                    ?>
            </h6></div><hr>
            <?php include ("../modal/tambah_pencaker_nagari.php")?>
      <button href="#" type="button" data-toggle="modal" data-target="#ModalPencaker" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
    </div><br>
            <!-- start: Accordion -->
            <div class="table-responsive">
                                <table class="display table table-striped table-bordered table-hover" id="dataTables-example" width="2000px">
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
                                            <th class="text-center" width="auto"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php
                                                 require '../koneksi.php';
                                                $sql="select * From penganggur 
                                                 join pengguna on penganggur.nagari=pengguna.id_nagari2
                                                 join nagari on penganggur.kecamatan=nagari.id_nagari
                                                 join nagari2 on penganggur.nagari=nagari2.id_nagari2
                                                 where nama='$nama'";

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
                                                    $tgl_lahir=date('d F Y', strtotime($tgl_lahir));
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
                                                    $jurusan=$row['jurusan'];
                                                    ?>
                                        <tr >
                                            <td><?php echo "$no_urut"; ?></td>
                                            <td><?php echo "$nama_lengkap"; ?></td>
                                            <td><?php echo "$jk"; ?></td>
                                            <td><?php echo "$tmpt_lahir"; ?></td>
                                            <td><?php echo "$tgl_lahir"; ?></td>
                                            <td><?php echo "$umur"; ?></td>
                                            <td><?php echo "$nik"; ?></td>
                                            <td><?php echo "$jorong"; ?>, Nagari <?php echo "$nama_nagari2"; ?>, Kecamatan <?php echo "$nama_nagari"; ?></td>
                                            <td><?php echo "$phone"; ?></td>
                                            <td><?php echo "$pendidikan"; ?> <?php echo "$jurusan"; ?></td>
                                            <td><?php echo "$pekerjaan"; ?></td>
                                            <td><?php echo "$keterampilan"; ?></td>
                                            <td><?php echo "$pelatihan"; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <?php include ("../update/edit_pencaker.php")?>
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPencaker<?php echo $id_penganggur; ?>"><i class="fa fa-edit"></i></a>
                                     
                                                <a class="btn btn-outline-danger btn-sm btn-circle"  href="../controller/aksi_pencaker.php?id_penganggur=<?php echo $id_penganggur; ?>&aksi=hapus" onclick="javascript: return confirm('Anda yakin hapus <?php echo $nama;?> ?')"><i class="fa fa-times"></i></a>
                                             </div>
                                            </td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>  <hr>
              <!--end: Accordion -->
              </div>
        	</div>
		</div>
	</div>
</div>
</main>
