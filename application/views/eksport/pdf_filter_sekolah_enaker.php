<?php
// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new Pdf ('', PDF_UNIT, 'FOLIO', true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(25, 15, 25);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 1);

// add a page
$pdf->AddPage('L');

// set font
$pdf->SetFont('times', '', 9);

$tgl_sekarang = date("d F Y");
$tahun = date ("Y");

if($cetak_bk->num_rows() > 0){

foreach ($get_sekolah->result() as $row) {
	$nama_sekolah = $row->nama_sekolah;
	$alamat = $row->alamat;
}

$i=0;
            $html=' 
					<table>
					<tr><td align="center"><h3>Data Bursa Kerja Khusus</h3></td></tr>
					<tr><td align="center"><h3>'.$nama_sekolah.'</h3></td></tr>
					<tr><td align="center"><h6>'.$alamat.'</h6></td></tr>
					</table>
					<br><br><br>
					<table border="1" width="100%" cellpadding="1" margin="auto">  
					 <tr bgcolor="yellow">
						<th align="center" rowspan="2" width="5%">No.</th>
						<th align="center" rowspan="2" width="25%">Nama Sekolah</th>
						<th align="center" colspan="2" width="25%">Penempatan Alumni</th>
						<th align="center" rowspan="2" width="10%">Total</th>
						<th align="center" rowspan="2" width="25%">Perusahaan / Instansi</th>
						<th align="center" rowspan="2" width="10%">Tahun</th>
						</tr>
						<tr bgcolor="yellow">
						<th align="center" >Laki-laki</th>
						<th align="center" >Perempuan</th>
						</tr>';
            foreach ($cetak_bk->result() as $row2) {
					$sekolah=$row2->sekolah;
					$lk=$row2->lk;
					$pr=$row2->pr;
					$instansi=$row2->instansi;
					$tahun=$row2->tahun;
					$total=$lk+$pr;
                    $i++;
                    $html.='<tr>
							<td align="center">'.$i.'</td>
							<td align="center">'.$sekolah.'</td>
							<td align="center">'.$lk.' Orang</td>
							<td align="center">'.$pr.' Orang</td>
							<td align="center">'.$total.' Orang</td>
							<td align="center">'.$instansi.'</td>
							<td align="center">'.$tahun.'</td>
			    			</tr>';
                }
            $html.='</table>';

// output the HTML content
$pdf->writeHTML($html, true, true, true, true, '');
// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Laporan_Data_Bursa_Kerja_Khusus.pdf', 'D');

}else{
	echo "
	<script>
	alert('Tidak Ada Data');
	history.back(self);
	</script>
	";
}
