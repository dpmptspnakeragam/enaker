<?php
$pdf = new cezpdf('FOLIO', 'landscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 2, 1, 1);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');

if ($get_penganggur->num_rows() > 0){

$i = 1;
foreach($get_penganggur->result() as $row ){
	$kecamatan=$row->nama_nagari;

// Teks header	
$pdf->addText(350, 570, 12,'<b>Laporan Data Pencari Kerja Kabupaten Agam</b>');
$pdf->addText(410, 555, 12,'<b>Berdasarkan Pendidikan</b>');
$pdf->addText(35, 545, 10,'<b>Kecamatan : '.$kecamatan.' | Nagari : '.$row->nama_nagari2.'</b>');

	
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
				   'Pendidikan Terakhir / Jurusan'=>"$row->pendidikan / $row->jurusan",
				   'Pekerjaan Yang Diinginkan'=>$row->pekerjaan,
				   'Keterampilan Yang DImiliki'=>$row->keterampilan,
				   'Pelatihan Yang Diinginkan'=>$row->pelatihan,
				   );
	$i++;

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

$pdf->ezTable($data, '', '', $options);


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