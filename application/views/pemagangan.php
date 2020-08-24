<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">HI & Produktifitas</li>
					<li class="breadcrumb-item active" aria-current="page">Pemagangan</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fa fa-globe"></i> Pemagangan</h3>
			<hr>
			<div class="span12">
				<?php if ($pemagangan->num_rows() == 0) { ?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						Maaf, untuk saat ini tidak ada Pemagangan
					</div>
					<?php } else {
					foreach ($pemagangan->result() as $row) {
					?>
						<h5 class="text-secondary">
							<i class="fa fa-briefcase"></i> <?= $row->judul; ?>
							<span>
							</span>
						</h5>
						<div class="image-wrapp shadow">
							<img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" alt="Gambar Pemagangan" width="100%" />
						</div>
						<hr>
						<div class="clearfix">
						</div>
						<h6>
							<span class="text-muted"><i class="fa fa-bookmark"></i> Keterangan</span>
						</h6>
						<p><?= $row->keterangan; ?></p>
						<hr>
						<!---<?php include("tambah_pesertamagang.php") ?>--->
						<!--- <a href="#" class="btn btn-md btn-primary" data-toggle="modal" data-target="#ModalPesertaMagang">Daftar Pemagangan Disini
                  </a> --->
				<?php
					}
				}
				?>
			</div>
			<hr>
		</div>
	</div>
</div>
</div>