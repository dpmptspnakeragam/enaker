<?php
$pdf = new cezpdf('FOLIO', 'landscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 2, 1, 1);
$pdf->selectFont('ezpdf/fonts/Times-Roman.afm');

$all = $pdf->openObject();
//Garis bawah untuk footer
$pdf->line(35, 49, 890, 49);

//Teks kiri bawah
date_default_timezone_set("Asia/Jakarta");
$pdf->addText(35,34,8,'Dieksport pada tanggal : ' . date( 'd-m-Y'));
$pdf->addText(35,20,8,'<b>e-Naker, DPMPTSP-NAKER, Kabupaten Agam</b>');
$pdf->addJpegFromFile('logoenaker.jpg',850,15,20);
$pdf->ezStartPageNumbers(500, 15, 8);
$pdf->closeObject();

// Tampilkan object di semua halaman


$pdf->addObject($all, 'all');

if ($tampil_pencaker->num_rows() > 0){

$i = 1;
foreach ($tampil_pencaker->result() as $row) {

	
// Teks header	
$pdf->addText(350, 570, 12,'<b>Laporan Data Pencari Kerja Kabupaten Agam</b>');
// $pdf->addText(370, 555, 12,'<b>Berdasarkan Pelatihan Yang Diinginkan</b>');
$pdf->addText(35, 545, 10,'<b>Kecamatan : '.$row->nama_nagari.'</b>');
// Garis atas untuk header
$pdf->line(35, 535, 890, 535);

//Format Menampilkan data di ezPdf
	$data[$i]=array('No'=>$i,
			       'Nama'=>$row->nama_lengkap,
				   'JK'=>$row->jk,
				   'Tempat Lahir'=>$row->tmpt_lahir,
				   'Tanggal Lahir'=>$row->tgl_lahir,
				   'Umur'=>$row->umur,
				   'Nomor Induk Kependudukan'=>$row->nik,
				   'Alamat Tetap'=>"$row->jorong, Nagari $row->nama_nagari2, Kec. $row->nama_nagari", 
				   'No.HP / Telp'=>$row->phone,
				   'Pendidikan Terakhir / Jurusan'=>"$row->pendidikan $row->jurusan",
				   'Pekerjaan Yang Diinginkan'=>$row->pekerjaan,
				   'Keterampilan Yang DImiliki'=>$row->keterampilan,
				   'Pelatihan Yang Diinginkan'=>$row->pelatihan,
				   );
	$i++;

}

//Tampilkan Dalam Bentuk Table
$options = array('shaded' => 1, 'width' => 900, 'titleFontSize' => 8, 'fontSize' => 8, 'cols'=>array(
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

$pdf->ezTable($data,'', '', $options);
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