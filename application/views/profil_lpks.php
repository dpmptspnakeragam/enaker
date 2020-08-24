<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">HI & Produktifitas</li>
					<li class="breadcrumb-item active" aria-current="page">Lembaga Pelatihan Kerja Swasta</li>
					<li class="breadcrumb-item active" aria-current="page">Profil</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fa fa-globe"></i> Profil Lembaga Pelatihan Kerja Swasta</h3>
			<hr>
			<div class="row">
				<?php if ($profil->num_rows() == 0) { ?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						Maaf, data tidak ada</b>
					</div>
					<?php } else {
					foreach ($profil->result() as $row) {
					?>
						<div class="col-lg-4 col-sm-12 mb-5">
							<div class="card-deck">
								<div class="card rounded bg-light shadow">
									<img class="card-img-top" src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" alt="Card image cap">
									<div class="card-body text-center">
										<h5 class="card-title"><?php echo $row->nama_lpk; ?></h5>
									</div>
									<ul class="list-group list-group-flush" style="font-size: 12px;">
										<li class="list-group-item"><span class="text-info">Pengurus</span> <br> <span class="text-muted"><?php echo $row->pengurus; ?></span> </li>
										<li class="list-group-item"><span class="text-info">Alamat</span> <br> <span class="text-muted"><?php echo $row->alamat; ?></span></li>
										<li class="list-group-item"><span class="text-info">Jumlah Yang Dilatih</span> <br> <span class="text-muted"><?php echo $row->jumlah_latih; ?> Orang</span></li>
										<li class="list-group-item"><span class="text-info">Sejarah</span> <br> <span class="text-muted"><?php echo $row->sejarah; ?></span></li>
										<!--- <li class="list-group-item"><span class="text-info">Jumlah Yang Dilatih Pertahun</span> 
						    	<span class="text-muted"><br> 2017 : <?php echo $row->tujuhbelas; ?> Orang
						    	<br> 2018 : <?php echo $row->delapanbelas; ?> Orang
						    	<br> 2019 : <?php echo $row->sembilanbelas; ?> Orang</span>
						    </li> ---->
									</ul>
								</div>
							</div>
						</div>
				<?php }
				} ?>
			</div>
			<hr>

		</div>
	</div>
</div>
</div>
<?= $pagination; ?>