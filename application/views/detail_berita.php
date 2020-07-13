<?php foreach ( $berita->result() as $row ) {
?>
<html lang="en">
  <body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			     <li class="breadcrumb-item active" aria-current="page">Detail Informasi</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:90%;">
			<div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- start article 1 -->
            <article class="blog-post">
              <div class="post-heading">
                <h3>
                  <span class="text-info">
                    <?php echo $row->judul_berita;?>
                  </span>
                </h3>
              </div><hr>
              <div class="`row">
                <div class="span8">
                  <div class="post-image">
                      <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" alt="Gambar berita" width="100%"/>
                  </div>
                  <div class="tanda bg-light" style="padding:10px; margin-top:10px;">
                      <i class="fa fa-calendar"></i> <?php echo $row->tgl_berita; ?>  /   <i class="fa fa-tags"></i></i> Oleh : <?php echo $row->pengirim_berita ?>
                  </div>
                  <div class="clearfix">
                  </div><hr>
                  <p>
                    <?php echo $row->isi_berita ?><br>
                    <a class="text-info" href=" <?php echo $row->alamat ?>" target="_blank">
                      <?php echo $row->alamat ?>
                    </a>
                  </p><hr>
                </div>
              </div>
        </div>

      </div>
	   </div>
		</div>
	</div>
</div>
<?php } ?>