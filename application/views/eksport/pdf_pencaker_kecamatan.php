<?php
require_once('koneksi.php');
include "pdf/class.ezpdf.php"; //class ezpdf yg di panggil
$pdf = new Cezpdf('FOLIO', 'landscape');

//Set margin dan font
$pdf->ezSetCmMargins(1, 2, 1, 1);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');

//Tampilkan gambar di dokumen PDF
//$pdf->addJpegFromFile('logo.jpg',60,850,50);

//Teks di tengah atas untuk judul header
//$pdf->addText(200, 900, 12,'<b>PEMERINTAH KABUPATEN AGAM</b>');
//$pdf->addText(150, 888, 12,'<b>DINAS PENANAMAN MODAL PELAYANAN TERPADU</b>');
//$pdf->addText(185, 876, 12,'<b>SATU PINTU DAN KETENAGAKERJAAN</b>');
//$pdf->addText(155, 866, 8,'<b>Jl. Veteran No.1 Padang Baru Lubuk Basung Kode Pos 26415 Telp/Faks. (0752) 66354</b>');
//$pdf->addText(140, 854, 8,'<b>website:ptsp.agamkab.go.id. email:dpmptspnakeragam@gmail.com SMS Center 085329085225</b>');

//Garis atas untuk header
//$pdf->line(20, 845, 590, 845);
// Baca input tanggal yang dikirimkan user
//echo "$mulai $selesai";exit;


$kecamatan=$_GET['kecamatan'];
$sql="select * From penganggur 
join nagari on penganggur.kecamatan=nagari.id_nagari
join nagari2 on penganggur.nagari=nagari2.id_nagari2
where penganggur.kecamatan='$kecamatan'
order by nagari2.nama_nagari2 asc";
//echo $tampil;exit;
$hasil=pg_query($sql);
//Menghitung jumlah data pada database				
$jml = pg_num_rows($hasil);
//echo $jml;exit;
if ($jml > 0){

$i = 1;
while($r = pg_fetch_array($hasil)) {
	$kecamatan=$r[nama_nagari];
//Format Menampilkan data di ezPdf
	$data[$i]=array('No'=>$i,
			       'Nama'=>"$r[nama_lengkap]",
				   'JK'=>"$r[jk]",
				   'Tempat Lahir'=>"$r[tmpt_lahir]",
				   'Tanggal Lahir'=>"$r[tgl_lahir]",
				   'Umur'=>"$r[umur]",
				   'Nomor Induk Kependudukan'=>"$r[nik]",
				   'Alamat Tetap'=>"$r[jorong], Nagari $r[nama_nagari2], Kec. $r[nama_nagari]",
				   'No.HP / Telp'=>"$r[phone]",
				   'Pendidikan Terakhir / Jurusan'=>"$r[pendidikan] $r[jurusan]",
				   'Pekerjaan Yang Diinginkan'=>"$r[pekerjaan]",
				   'Keterampilan Yang DImiliki'=>"$r[keterampilan]",
				   'Pelatihan Yang Diinginkan'=>"$r[pelatihan]",
				   );
	$i++;

//Garis bawah untuk footer
$pdf->line(30, 50, 900, 50);

//Teks kiri bawah
date_default_timezone_set("Asia/Jakarta");
$pdf->addText(55,34,8,'Dieksport pada tanggal : '. date( 'd-m-Y'));
$pdf->addText(55,20,8,'<b>e-NAKER, DPMPTSP-NAKER, Kabupaten Agam</b>');

//$pdf->ezStartPageNumbers(470, 20, 8);
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
				'Alamat Tetap'=>array('width' => 130, 'justification'=>'center'),
				'No.HP / Telp'=>array('width' => 60, 'justification'=>'center'),
				'Pendidikan Terakhir / Jurusan'=>array('width' => 70, 'justification'=>'center'),
				'Pekerjaan Yang Diinginkan'=>array('width' => 70, 'justification'=>'center'),
				'Keterampilan Yang DImiliki'=>array('width' => 70, 'justification'=>'center'),
				'Pelatihan Yang Diinginkan'=>array('width' => 70, 'justification'=>'center')
				));

$pdf->ezTable($data, '', '<b>Laporan Data Pencari Kerja Kecamatan '.$kecamatan.'</b>', $options);


// Penomoran halaman
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