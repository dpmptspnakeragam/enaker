<?php foreach ( $pejabat->result() as $row ) {
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			    <li class="breadcrumb-item active" aria-current="page">Detail Anggota</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h2 class="text-info"><i class="fa fa-sitemap"></i> <?php echo $row->jabatan ?></h2><hr>
            <h4 class="text-info"><i class="fa fa-user"></i></i> <?php echo $row->nama?></h4><hr>
            <div class="accordion" id="accordion2">
            <h5 class="rheading"><i class="fa fa-users"></i> Anggota<span></span></h5><hr>
            <?php 
            if (empty($anggota->result())) { ?>
				<div class="alert alert-info alert-dismissible fade show" role="alert">
            	Data Anggota tidak ada
        		</div>
			<?php } else { ?>
		    <div class="card-body">
			<div class="row">			
			<?php foreach ( $anggota->result() as $row ) {
	        ?>
              <div class="col-md-4 col-sm-6">
                <div class="card text-center bg-light shadow">
                  <span style="padding:10px;"> <img src="<?= base_url(); ?> assets/imgupload/<?php echo $row->gambar_anggota; ?>" alt="foto" align="center" style="height:150px"></span>
                  <span style="padding:10px;"><h5 class="text-info"><?php echo $row->nama_anggota; ?></h5><p style="font-size: 12px;">NIP. <?php echo $row->nip_anggota; ?></p></span>
                  <span style="padding:10px;"><h6 class="text-info"><?php echo $row->jabatan_anggota; ?></h6></span>
				  <span style="padding:10px;"><h6><i class="fa fa-phone"></i> <?php echo $row->cp_anggota; ?></h6></span>
                </div>
				</div>
			<?php
			}}
			?>     
			</div>   
			</div>     
      		</div> 
			<hr>   
      	</div>
	</div>
</div>

<?php } ?>