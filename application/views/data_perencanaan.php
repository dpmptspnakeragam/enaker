<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			    <li class="breadcrumb-item active" aria-current="page">Data Perencanaan</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info"><i class="fa fa-book"></i> Data Perencanaan</h3>
			<hr>
			<div class="row">
 <?php foreach ($renstra->result() as $row){
?>
					<div class="col-lg-3 col-sm-12">
				  <div class="card shadow">
				    <img class="card-img-top" src="<?= base_url(); ?>assets/img/agamhitam.png" alt="Card image cap">
				    <div class="card-body text-center">
				      <a href="<?= base_url(); ?>assets/fileupload/<?= $row->file; ?>"><h5 class="card-title"><?= $row->nama_renstra; ?></h5></a>
				    </div>
				  </div>
				</div>
		<?php } ?>
              </div><hr>
        	</div>
		</div>
	</div>
</div>