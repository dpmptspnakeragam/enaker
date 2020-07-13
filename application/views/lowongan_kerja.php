<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Informasi</li>
			     <li class="breadcrumb-item active" aria-current="page">Lowongan Kerja</li>
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
            <?php  foreach ( $lowongan->result() as $row ) {
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
                 <div class="tanda bg-light" style="padding:10px; margin-top:10px;">
                      <i class="fa fa-calendar"></i> <?php echo $row->tgl_berita; ?> /  <i class="fa fa-tags"></i></i> Dikirim oleh : <?php echo $row->pengirim_berita ?>
                  </div><hr>
                  <p>
                    <?php echo $row->konten_berita;?>
                  </p>
                  <a href="<?= base_url(); ?>berita/detail_berita/<?php echo $row->id_berita; ?>" class="btn btn-small btn-outline-primary">Selengkapnya...
                  </a>
                </div>
              </div><hr>
              <?php } ?>
            </article></div>
            
        <div class="col-md-4 col-sm-12">
            <div class="p-4 mb-3 rounded bg-light">
              <h5>Lowongan Terbaru
                <span>
                </span>
              </h5>
            <?php  foreach ( $terbaru->result() as $row ) {
            ?>
              <ul class="recent-posts">
                <li>
                  <a href="<?= base_url(); ?>berita/detail_berita/<?php echo $row->id_berita; ?>">
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
          </aside>
        </div>

      </div>
	   </div>
		</div>
	</div>
</div>
<?= $pagination; ?>