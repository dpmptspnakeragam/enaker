<?php foreach ($profile->result() as $row) { ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">UPT Balai Latihan Kerja</li>
			    <li class="breadcrumb-item active" aria-current="page">Profil</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="mx-auto" style="width:80%;">
			<h3 class="text-info">Profil UPT Balai Latihan Kerja</h3>
			<hr>
			<div class="span12">
              <blockquote>
                <p style="text-align:justify;">
                  <i class="icon-quote-left">
                  </i>
                  <?= $row->gambaran_umum;?>
                </p>
              </blockquote>
            </div>
            <!-- start: Accordion -->
            <div class="accordion" id="accordionExample" >
				  <div class="card">
				    <div class="card-header bg-dark" id="headingOne">
				      <h4 class="mb-0">
				        <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          <strong>Visi & Misi</strong>
				        </button>
				      </h4>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <h4>Visi
	                    </h4>
	                    <blockquote>
	                      <p>
	                        <?= $row->visi; ?>
	                      </p>
	                    </blockquote>
	                    <hr>
	                    <h4>Misi
	                    </h4>
	                    <blockquote>
	                      <p style="text-align:justify;">
	                        <?= $row->misi; ?>
	                      </p>
	                    </blockquote>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header bg-warning" id="headingTwo">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <strong>Tugas & Fungsi</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				        <h4>Tugas
	                    </h4>
	                    <blockquote>
	                      <p style="text-align:justify;">
	                        <?= $row->tugas; ?>
	                      </p>
	                    </blockquote>
	                    <hr>
	                    <h4> Fungsi 
	                    </h4>
	                    <blockquote>
	                      <p style="text-align:justify;">
	                        <?= $row->fungsi; ?>
	                      </p>
	                    </blockquote>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header bg-danger" id="headingThree">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <strong>Struktur Organisasi</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        <img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" style="width:100%;" class="img-responsive">
				      </div>
				    </div>
				  </div>
				</div><hr>
              <!--end: Accordion -->
              </div>
        	</div>
		</div>
	</div>
</div>
<?php } ?>