<?php 
function tgl_indo($date){
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);
 
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);
}

$tahun = date ("Y");

foreach ($tampil_kecamatan as $row3) {} 

$i=0;
?>
<html>
<style>
    .tb{
     width: 100%;
    }
    th{
    	width:3%;
    }
</style>
<body align="center">
		<span width="100%" align="center">
		<span align="center">
			<h4>Rekapitulasi Data<br>
			Pencari Kerja / Penganggur Di Kabupaten Agam<br>
			Tahun <?php echo $tahun ?></h4>
		</span>
		</span>
		<span align="left">
		<h5>Kecamatan : <?php echo $row3->nama_nagari ?>, Nagari : <?php echo $row3->nama_nagari2 ?>, <?php echo tgl_indo(date('Y-m-d')); ?></h5>
		</span>
		<table border=1 class="tb" margin="auto" align="center" cellpadding="2">
		<thead cellpadding="2">  
		 	<tr bgcolor="yellow">
			<th align="center" colspan="14" >Berdasarkan Pendidikan</th>
			<th align="center" colspan="10" >Berdasarkan Umur</th>
			</tr>
			<tr bgcolor="yellow" cellpadding="2">
			<th align="center" colspan="2">Tidak Tamat SD</th>
			<th align="center" colspan="2">SD</th>
			<th align="center" colspan="2">SLTP</th>
			<th align="center" colspan="2">SLTA</th>
			<th align="center" colspan="2">D1-D3</th>
			<th align="center" colspan="2">D4-S1</th>
			<th align="center" colspan="2">JUMLAH</th>
			<th align="center" colspan="2">15-19 Tahun</th>
			<th align="center" colspan="2">20-29 Tahun</th>
			<th align="center" colspan="2">30-44 Tahun</th>
			<th align="center" colspan="2">45-54 Tahun</th>
			<th align="center" colspan="2">JUMLAH</th>
			</tr>
			<tr bgcolor="yellow" cellpadding="2">
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			<th align="center">LK</th>
			<th align="center">PR</th>
			</tr>
		</thead>
		<tbody>            
			<?php  
                $no = 1;
                foreach ( $kecamatan as $row ) {
            ?>
                  <tr cellpadding="2">
                    <td><?php foreach($row->jumlahttsdlk->result_array() as $row2){echo $totalttsdlk[] = intval($row2['jumlah_jk']); }?></td>
                    <td><?php foreach($row->jumlahttsdpr->result_array() as $row2){echo $totalttsdpr[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahsdlk->result_array() as $row2){echo $totalsdlk[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahsdpr->result_array() as $row2){echo $totalsdpr[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahsmplk->result_array() as $row2){echo $totalsmplk[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahsmppr->result_array() as $row2){echo $totalsmppr[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahsmalk->result_array() as $row2){echo $totalsmalk[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahsmapr->result_array() as $row2){echo $totalsmapr[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahdlk->result_array() as $row2){echo $totaldlk[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahdpr->result_array() as $row2){echo $totaldpr[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahslk->result_array() as $row2){echo $totalslk[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahspr->result_array() as $row2){echo $totalspr[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><b><?php foreach($row->jumlahplk->result_array() as $row2){echo $totalplk[] = intval($row2['jumlah_jk']); } ?></b></td>
                    <td><b><?php foreach($row->jumlahppr->result_array() as $row2){echo $totalppr[] = intval($row2['jumlah_jk']); } ?></b></td>
                    <td><?php foreach($row->jumlahulk1->result_array() as $row2){echo $totalulk1[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahupr1->result_array() as $row2){echo $totalupr1[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahulk2->result_array() as $row2){echo $totalulk2[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahupr2->result_array() as $row2){echo $totalupr2[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahulk3->result_array() as $row2){echo $totalulk3[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahupr3->result_array() as $row2){echo $totalupr3[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahulk4->result_array() as $row2){echo $totalulk4[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><?php foreach($row->jumlahupr4->result_array() as $row2){echo $totalupr4[] = intval($row2['jumlah_jk']);} ?></td>
                    <td><b><?php foreach($row->jumlahulk->result_array() as $row2){echo $totalulk[] = intval($row2['jumlah_jk']); } ?></b></td>
                    <td><b><?php foreach($row->jumlahupr->result_array() as $row2){echo $totalupr[] = intval($row2['jumlah_jk']); } ?></b></td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            <br>
            <hr>
		<h5>&copy; 2020, e-Naker
		<br>DINAS PENANAMAN MODAL PELAYANAN TERPADU SATU PINTU DAN KETENAGAKERJAAN KABUPATEN AGAM</h5>
</body>
</html>