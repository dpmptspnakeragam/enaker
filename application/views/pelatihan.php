<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">UPT Balai Latihan Kerja</li>
					<li class="breadcrumb-item active" aria-current="page">Pelatihan</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fa fa-users"></i> Pelatihan Kerja</h3>
			<hr>
			<div class="row">
				<?php if ($pelatihan->num_rows() == 0) { ?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						Maaf, untuk saat ini tidak ada <b>Pendaftaran Pelatihan</b> yang <b>Buka</b>
					</div>
					<?php } else {
					foreach ($pelatihan->result() as $row) {
					?>
						<div class="col-lg-3 col-sm-12">
							<div class="pelatihanblk bg-ligh">
								<div class=" bg-light shadow">
									<img class="card-img-top" src="<?= base_url(); ?>/assets/imgupload/<?php echo $row->gambar; ?>" alt="Card image cap">
									<div class="card-head mt-2 text-center">
										<h5 class="card-title"><?php echo $row->pelatihan; ?></h5>
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item"><span class="text-info text-center">Persyaratan :</span> <br>
											<span class="syaratblk"><?php echo $row->persyaratan; ?></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
			</div>
			<hr>
			<button href="daftar_blk.php" class="btn btn-md btn-primary" data-toggle="modal" data-target="#ModalPesertablk" disabled>Daftar Pelatihan Disini</button>
	<?php }
				} ?>
		</div>
	</div>
</div>
</div>
<?= $pagination; ?>
<hr>