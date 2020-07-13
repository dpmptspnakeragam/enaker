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
		<div class="mx-auto" style="width:90%;">
			<h3 class="text-info"><i class="fas fa-briefcase"></i> Data Pencari Kerja</h3>
			<hr>
      <div class="alert alert-primary" role="alert">
              <h6>Total Data Pencari Kerja di Kabupaten Agam :
              <?php echo number_format($total_pencaker);?>
              </h6></div>
			<div class="span12">
			<div class="table-responsive">
                <table class="table table-striped table-borderless table-hover display" id="dataTables-example" width="100%">
                <thead class="bg-info text-light">
                  <tr>
            <th class="text-center" rowspan="3">No.</th>
                    <th class="text-center" rowspan="3">Kecamatan</th>
                    <th class="text-center" colspan="14">Berdasarkan Pendidikan</th>
          <th class="text-center" colspan="10">Berdasarkan Umur</th>
                  </tr>
                  <tr>
                    <th class="text-center" colspan="2">Tidak Tamat SD</th>
                    <th class="text-center" colspan="2">SD</th>
                    <th class="text-center" colspan="2">SLTP</th>
                    <th class="text-center" colspan="2">SLTA</th>
                    <th class="text-center" colspan="2">D1-D3</th>
                    <th class="text-center" colspan="2">D4-S1</th>
                    <th class="text-center" colspan="2">JUMLAH</th>
                    <th class="text-center" colspan="2">15-19 Tahun</th>
                    <th class="text-center" colspan="2">20-29 Tahun</th>
                    <th class="text-center" colspan="2">30-44 Tahun</th>
                    <th class="text-center" colspan="2">45-54 Tahun</th>
                    <th class="text-center" colspan="2">JUMLAH</th>
                  </tr>
          <tr>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
            <th class="text-center">LK</th>
          <th class="text-center">PR</th>
          </tr>
                </thead>
                <tbody class="text-info">
<?php  
$no = 1;
foreach ( $tampil_data as $row ) {
?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><a href="<?= base_url(); ?>pencaker/detail_kecamatan/<?php echo $row->id_nagari; ?>"><?php echo $row->nama_nagari; ?><a></td>
                    <td><?php foreach($row->jumlahttsdlk->result_array() as $row2){echo $totalttsdlk[] = intval($row2['jumlah_jk']); } ?></td>
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
                    <td><?php foreach($row->jumlahupr4->result_array() as $row2){echo $totalupr4[] = intval($row2['jumlah_jk']); } ?></td>
                    <td><b><?php foreach($row->jumlahulk->result_array() as $row2){echo $totalulk[] = intval($row2['jumlah_jk']); } ?></b></td>
                    <td><b><?php foreach($row->jumlahupr->result_array() as $row2){echo $totalupr[] = intval($row2['jumlah_jk']); } ?></b></td>
                  </tr>
                  <?php } ?>
                </tbody>
          <tfoot class="text-info">
          <tr>
            <th colspan="2">Kab. Agam</th>
            <th><?php echo array_sum($totalttsdlk); ?></th>
            <th><?php echo array_sum($totalttsdpr); ?></th>
            <th><?php echo array_sum($totalsdlk); ?></th>
            <th><?php echo array_sum($totalsdpr); ?></th>
            <th><?php echo array_sum($totalsmplk); ?></th>
            <th><?php echo array_sum($totalsmppr); ?></th>
            <th><?php echo array_sum($totalsmalk); ?></th>
            <th><?php echo array_sum($totalsmapr); ?></th>
            <th><?php echo array_sum($totaldlk); ?></th>
            <th><?php echo array_sum($totaldpr); ?></th>
            <th><?php echo array_sum($totalslk); ?></th>
            <th><?php echo array_sum($totalspr); ?></th>
            <th><?php echo array_sum($totalplk); ?></th>
            <th><?php echo array_sum($totalppr); ?></th>
            <th><?php echo array_sum($totalulk1); ?></th>
            <th><?php echo array_sum($totalupr1); ?></th>
            <th><?php echo array_sum($totalulk2); ?></th>
            <th><?php echo array_sum($totalupr2); ?></th>
            <th><?php echo array_sum($totalulk3); ?></th>
            <th><?php echo array_sum($totalupr3); ?></th>
            <th><?php echo array_sum($totalulk4); ?></th>
            <th><?php echo array_sum($totalulk4); ?></th>
            <th><?php echo array_sum($totalulk); ?></th>
            <th><?php echo array_sum($totalupr); ?></th>
          </tr>
          </tfoot>
              </table>
              </div>
              </div>
        	</div>
		</div><hr>
	</div>
</div>