<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">P2K2</li>
			     <li class="breadcrumb-item active" aria-current="page">Bursa Kerja Khusus</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%; padding-bottom: 20px;">
			<h3 class="text-info"><i class="fa fa-briefcase"></i> Bursa Kerja Khusus</h3>
			<hr>
			<div class="span12">
			<div class="table-responsive">
                <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="3" rowspan="2">No.</th>
                                            <th class="text-center" width="150" rowspan="2">Nama Sekolah</th>
                                            <th class="text-center" width="50" colspan="2">Penempatan Alumni</th>
                                            <th class="text-center" width="50" rowspan="2">Total</th>
                                            <th class="text-center" width="100" rowspan="2">Perusahaan / Instansi</th>
                                            <th class="text-center" width="50" rowspan="2">Tahun</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" width="100">Laki-laki</th>
                                            <th class="text-center" width="100">Perempuan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-info">
                                            <?php $no = 1 ;
                                            foreach ($bursa_khusus->result() as $row ) {
                                            ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no; ?></td>
                                            <td><?= $row->sekolah; ?></td>
                                            <td><?= $row->lk; ?> Orang</td>
                                            <td><?= $row->pr;?> Orang</td>
                                            <td><?= $row->lk+$row->pr;?> Orang</td>
                                            <td><?= $row->instansi;?></td>
                                            <td><?= $row->tahun;?></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
              </div>
              </div>
        	</div>
		</div><hr>
	</div>
</div>