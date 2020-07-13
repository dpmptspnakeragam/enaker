<?php
require_once('koneksi.php');
include "pdf/class.ezpdf.php"; //class ezpdf yg di panggil
$pdf = new Cezpdf('FOLIO', 'landscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 2, 1, 1);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');

$all = $pdf->openObject();
// Garis atas untuk header
$pdf->line(35, 535, 890, 535);
//Garis bawah untuk footer
$pdf->line(35, 49, 890, 49);
//Teks kiri bawah
date_default_timezone_set("Asia/Jakarta");
$pdf->addText(35,34,8,'Dieksport pada tanggal : '. date( 'd-m-Y'));
$pdf->addText(35,20,8,'<b>e-Naker, DPMPTSP-NAKER, Kabupaten Agam</b>');
$pdf->addJpegFromFile('logoenaker(new).jpg',850,540,35);
$pdf->ezStartPageNumbers(500, 15, 8);
$pdf->closeObject();

// Tampilkan object di semua halaman
 $pdf->addObject($all, 'all');

$jk=$_GET['jk'];
$pelatihan=$_GET['pelatihan'];
$kecamatan=$_GET['id_kecamatan'];
$sql="select * From penganggur 
join pengguna on penganggur.nagari=pengguna.id_nagari2
join nagari on penganggur.kecamatan=nagari.id_nagari
join nagari2 on penganggur.nagari=nagari2.id_nagari2
where penganggur.nagari='$kecamatan' and penganggur.pelatihan='$pelatihan' and penganggur.jk='$jk'
order by penganggur.kecamatan desc";
//echo $tampil;exit;
$hasil=pg_query($sql);
//Menghitung jumlah data pada database				
$jml = pg_num_rows($hasil);
//echo $jml;exit;
if ($jml > 0){

$i = 1;
while($r = pg_fetch_array($hasil)) {
	$nagari=$r[nama_nagari2];
	$kecamatan=$r[nama_nagari];
	
// Teks header	
$pdf->addText(350, 570, 12,'<b>Laporan Data Pencari Kerja Kabupaten Agam</b>');
$pdf->addText(370, 555, 12,'<b>Berdasarkan Pelatihan Yang Diinginkan</b>');
$pdf->addText(35, 545, 10,'<b>Nagari : '.$nagari.' - Kecamatan : '.$kecamatan.'</b>');

	
//Format Menampilkan data di ezPdf
	$data[$i]=array('No'=>$i,
			       'Nama'=>"$r[nama_lengkap]",
				   'JK'=>"$r[jk]",
				   'Tempat Lahir'=>"$r[tmpt_lahir]",
				   'Tanggal Lahir'=>"$r[tgl_lahir]",
				   'Umur'=>"$r[umur]",
				   'Nomor Induk Kependudukan'=>"$r[nik]",
				   'Alamat Tetap'=>"$r[jorong], $r[nama_nagari2], $r[nama_nagari]",
				   'No.HP / Telp'=>"$r[phone]",
				   'Pendidikan Terakhir / Jurusan'=>"$r[pendidikan] $r[jurusan]",
				   'Pekerjaan Yang Diinginkan'=>"$r[pekerjaan]",
				   'Keterampilan Yang DImiliki'=>"$r[keterampilan]",
				   'Pelatihan Yang Diinginkan'=>"$r[pelatihan]",
				   );
	$i++;

}

//Tampilkan Dalam Bentuk Table
$options = array('shaded' => 1, 'width' => 850, 'titleFontSize' => 8, 'fontSize' => 8, 'cols'=>array(
				'No'=>array('width' => 30, 'justification'=>'center'),
				'Nama'=>array('width' => 80, 'justification'=>'center'),
				'JK'=>array('width' => 30, 'justification'=>'center'),
				'Tempat Lahir'=>array('width' => 70, 'justification'=>'center'),
				'Tanggal Lahir'=>array('width' => 70, 'justification'=>'center'),
				'Umur'=>array('width' => 30, 'justification'=>'center'),
				'Nomor Induk Kependudukan'=>array('width' => 75, 'justification'=>'center'),
				'Alamat Tetap'=>"$r[jorong], Nagari $r[nama_nagari2], Kec. $r[nama_nagari]",
				'No.HP / Telp'=>array('width' => 60, 'justification'=>'center'),
				'Pendidikan Terakhir / Jurusan'=>array('width' => 70, 'justification'=>'center'),
				'Pekerjaan Yang Diinginkan'=>array('width' => 70, 'justification'=>'center'),
				'Keterampilan Yang DImiliki'=>array('width' => 70, 'justification'=>'center'),
				'Pelatihan Yang Diinginkan'=>array('width' => 70, 'justification'=>'center')
				));

$pdf->ezTable($data,'', '', $options);


// Penomoran halaman
//$pdf->ezStartPageNumbers(500, 20, 8);
$pdf->ezStream();
}

else{

	echo "
	<script>
	alert('Tidak Ada Data');
	history.back(self);
	</script>
	";

}

?>