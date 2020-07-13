<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Informasi</li>
			     <li class="breadcrumb-item active" aria-current="page">Berita</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:90%;">
			<div class="row">
        <div class="col-md-8 col-sm-12">
            <!-- start article 1 -->
            <article class="blog-post">
            <?php  foreach ( $berita->result() as $row ) {
            ?>
              <div class="post-heading">
                <h3 class="text-info">
                    <?php echo $row->judul_berita;?>
                </h3>
              </div><hr>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <a href="#">
                      <img src="<?= base_url(); ?>assets/imgupload/<?php echo $row->gambar; ?>" alt="Gambar berita" style="max-height:300px;"/>
                    </a>
                  </div>
                  <div class="tanda">
                      <i class="fa fa-calendar"></i> <?php echo $row->tgl_berita; ?>, <i class="fa fa-tags"></i></i> Oleh : <?php echo $row->pengirim_berita ?>
                  </div>
                  <div class="clearfix">
                  </div>
                  <p>
                    <?php echo $row->konten_berita;?>
                  </p>
                  <a href="<?= base_url(); ?>bursa_kerja/detail_berita/<?php echo $row->id_berita; ?>" class="btn btn-small btn-outline-primary ">Selengkapnya...
                  </a>
                </div>
              </div>
              <?php } ?> </div>

            <div class="col-md-4 col-sm-12 blog-sidebar">
            <div class="p-4 mb-3 rounded bg-light">
              <h5>Bursa Terbaru
                <span>
                </span>
              </h5>
            <?php  foreach ( $terbaru->result() as $row ) {
            ?>
              <ul class="recent-posts">
                <li>
                  <a href="<?= base_url(); ?>bursa_kerja/detail_berita/<?php echo $row->id_berita; ?>">
                    <?php echo $row->judul_berita;?>
                  </a>
                  <div class="clear">
                  </div>
                  <span class="tanda">
                    <i class="fa fa-calendar"></i>
                    <?php echo $row->tgl_berita; ?> 
                  </span>
                </li>
              </ul>
              <?php } ?>
            </div>
        </div>

      </div>
	   </div>
		</div>
	</div>
</div>
<hr>