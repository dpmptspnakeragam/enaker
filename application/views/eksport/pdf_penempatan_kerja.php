<?php
// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new Pdf('', PDF_UNIT, 'FOLIO', true, 'UTF-8', false);

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
$tahun = date("Y");

if ($cetak_penempatan->num_rows() > 0) {

    $i = 0;
    $html = ' 
					<table>
                    <tr><td align="center"><h2>e-Naker</h2></td></tr>
                    <tr><td align="center"><h3>Data Penempatan Kerja Perusahaan</h3></td></tr>
                    <tr><td align="center"><h3>Kabupaten Agam</h3></td></tr>
					</table>
					<br><br><br>
                    <table border="1" width="100%" cellpadding="1" margin="auto">  
                    <thead>
					 <tr bgcolor="yellow">
                     <th align="center"  >No.</th>
                     <th align="center"  >Nama Perusahaan</th>
                     <th align="center"  >Posisi</th>
                     <th align="center"  >Penempatan</th>
                     <th align="center"  >Pendidikan Terakhir</th>
                     <th align="center"  >Usia (Tahun)</th>
                     <th align="center"  >Laki-Laki (Orang)</th>
                     <th align="center"  >Perempuan (Orang)</th>
                     <th align="center"  >Status Karyawan</th>
                     <th align="center"  >Bulan</th>
                     <th align="center"  >Tahun</th>
                    </tr>
                    </thead>';
    foreach ($cetak_penempatan->result() as $row2) {
        $nama_perusahaan = $row2->nama_perusahaan;
        $posisi = $row2->posisi;
        $penempatan = $row2->penempatan;
        $pendidikan = $row2->pendidikan;
        $umur = $row2->umur;
        $status = $row2->status;
        $bulan = $row2->bulan;
        $tahun = $row2->tahun;
        $lk = $row2->lk;
        $pr = $row2->pr;
        $i++;
        $html .= '<tbody>
                            <tr>
							<td align="center">' . $i . '</td>
							<td align="center">' . $nama_perusahaan . '</td>
							<td align="center">' . $posisi . '</td>
							<td align="center">' . $penempatan . '</td>
							<td align="center">' . $pendidikan . '</td>
							<td align="center">' . $umur . '</td>
							<td align="center">' . $lk . '</td>
							<td align="center">' . $pr . '</td>
							<td align="center">' . $status . '</td>
							<td align="center">' . $bulan . '</td>
							<td align="center">' . $tahun . '</td>
                            </tr>
                            </tbody>';
    }
    $html .= '</table>';

    // output the HTML content
    $pdf->writeHTML($html, true, true, true, true, '');
    // reset pointer to the last page
    $pdf->lastPage();
    // ---------------------------------------------------------

    //Close and output PDF document
    $pdf->Output('Laporan_Penempatan_Kerja (e-Naker Agam).pdf', 'D');
} else {
    echo "
	<script>
	alert('Tidak Ada Data');
	history.back(self);
	</script>
	";
}
