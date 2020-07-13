<?php  foreach ( $profile->result() as $row ) {
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info">Profil Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu dan Ketenagakerjaan Kabupaten Agam</h3>
			<hr>
			<div class="span12">
              <blockquote>
                <p style="text-align:justify;">
                  <i class="icon-quote-left">
                  </i>
                  <?= $row->gambaran_umum; ?>
                </p>
              </blockquote>
            </div>
            <!-- start: Accordion -->
            <div class="accordion" id="accordionExample" style="padding-bottom: 30px;">
				  <div class="card">
				    <div class="card-header bg-dark" id="headingOne">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				          <strong>Visi & Misi</strong>
				        </button>
				      </h4>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body text-dark">
				        <h4>Visi
	                    </h4>
	                    <blockquote>
	                      <p>
	                        <?= $row->visi;?>
	                      </p>
	                    </blockquote>
	                    <hr>
	                    <h4>Misi
	                    </h4>
	                    <blockquote>
	                      <p>
	                        <?= $row->misi;?>
	                      </p>
	                    </blockquote>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header bg-warning" id="headingTwo">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <strong>Tugas & Fungsi</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body text-dark">
				        <h4>Tugas
	                    </h4>
	                    <blockquote>
	                      <p style="text-align:justify;">
	                        <?= $row->tugas;?>
	                      </p>
	                    </blockquote>
	                    <hr>
	                    <h4> Fungsi 
	                    </h4>
	                    <blockquote>
	                      <p style="text-align:justify;">
	                        <?= $row->fungsi;?>
	                      </p>
	                    </blockquote>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header bg-warning" id="headingThree">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <strong>Struktur Organisasi</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        <img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar;?>" style="width:100%;" class="img-responsive">
				      </div>
				    </div>
				  </div>
				<?php } ?>
				  <div class="card">
				    <div class="card-header bg-danger" id="headingFour">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          <strong>Pegawai & Staff</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				      <div class="card-body">
				      	<div class="row">
				        <?php foreach ( $penjabat->result() as $row ) {
				        ?>
                          <div class="col-md-3 col-sm-6">
                            <div class="card text-center shadow">
                              <span style="padding:10px;"> 
                                <img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" alt="foto" align="center" style="height:150px">
                              </span>
                              <span>
                                <a href="<?php echo base_url()?>profil/detail_anggota/<?php echo $row->id; ?>">
                                  <h5 class="text-info">
                                    <?= $row->nama;?>
                                  </h5>
                                </a>
                                <p style="font-size:12px;">NIP. <?= $row->nip;?></p>
                              </span>
                              <span style="padding:10px;">
                                <h6 class="text-info">
                                  <?= $row->jabatan;?>
                                </h6>
                              </span>
                              <span style="padding:10px;">
                              <h6><i class="fa fa-phone"></i>
                                <?= $row->cp;?>
                            	</h6>
                            	</span>
                            </div>
                          </div>
                          <?php } ?>  
						</div>
				      </div>
				    </div>
				  </div>
				</div>
              <!--end: Accordion -->
              </div>
        	</div>
		</div>
	</div>
</div>