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
            <?php 
            if ($nagari == null){ ?>
                <h3 class="text-info"><i class="fas fa-briefcase"></i> Data Pencari Kerja Nihil</h3>
            <hr>
            <div class="alert alert-primary" role="alert">
                <h6>Total Data Pencari Kerja : 0 Orang
                </h6>
            </div>
            <?php } else { 
                foreach ($nagari as $row) {} ?>
			     <h3 class="text-info"><i class="fas fa-briefcase"></i> Data Pencari Kerja Nagari <?php echo $row->nama_nagari2; ?></h3>
			<hr>
            <div class="alert alert-primary" role="alert">
                <h6>Total Data Pencari Kerja di Nagari <?php echo $row->nama_nagari2; ?> :
                  <?php echo number_format($total_nagari);?> Orang
                </h6>
            </div><?php } ?>
			<div class="span12">
			<div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example" width="2000px">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="auto">No</th>
                                            <th class="text-center" width="auto">Nama</th>
                                            <th class="text-center" width="auto">JK</th>
                                            <th class="text-center" width="auto">Tempat Lahir</th>
                                            <th class="text-center" width="auto">Tanggal Lahir</th>
                                            <th class="text-center" width="auto">Umur</th>
                                            <th class="text-center" width="auto">Alamat Tetap</th>
                                            <th class="text-center" width="auto">No. HP / Telp.</th>
                                            <th class="text-center" width="auto">Pendidikan Terakhir</th>
                                            <th class="text-center" width="auto">Pekerjaan Yang Diinginkan</th>
                                            <th class="text-center" width="auto">Keterampilan Yang dimiliki</th>
                                            <th class="text-center" width="auto">Pelatihan Yang Diinginkan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-info">
                                <?php  
                                $no = 1;
                                foreach ( $tampil_nagari as $row ) {
                                ?>
                                        <tr >
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_lengkap; ?></td>
                                            <td><?php echo $row->jk; ?></td>
                                            <td><?php echo $row->tmpt_lahir; ?></td>
                                            <td><?php echo $row->tgl_lahir; ?></td>
                                            <td><?php echo $row->umur; ?></td>
                                            <td><?php echo $row->jorong; ?>, Nagari <?php echo $row->nama_nagari2; ?>, Kecamatan <?php echo $row->nama_nagari; ?></td>
                                            <td><?php echo $row->phone; ?></td>
                                            <td><?php echo $row->pendidikan; ?></td>
                                            <td><?php echo $row->pekerjaan; ?></td>
                                            <td><?php echo $row->keterampilan; ?></td>
                                            <td><?php echo $row->pelatihan; ?></td>
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