<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
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
	<div class="panel-heading">
	<?php if( $this->session->flashdata('gagal')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('gagal'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ;?>
    <?php if( $this->session->flashdata('berhasil')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('berhasil'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ;?>
      <button type="button" href="#" data-toggle="modal" data-target="#EditProfil<?php echo $row->id; ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit fa-fw"></i> Update Data</button>
    </div><hr>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3>Profil Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu dan Ketenagakerjaan Kabupaten Agam</h3>
			<hr>
			<div class="span12">
              <blockquote>
                <p>
                  <i class="icon-quote-left">
                  </i>
                  <?= $row->gambaran_umum;?>
                </p>
              </blockquote>
            </div>
            <!-- start: Accordion -->
            <div class="accordion" id="accordionExample" style="padding-bottom: 30px;">
				  <div class="card">
				    <div class="card-header bg-info" id="headingOne">
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
	                      <p>
	                        <?= $row->misi; ?>
	                      </p>
	                    </blockquote>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header bg-info" id="headingTwo">
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
	                      <p>
	                        <?= $row->tugas; ?>
	                      </p>
	                    </blockquote>
	                    <hr>
	                    <h4> Fungsi 
	                    </h4>
	                    <blockquote>
	                      <p>
	                        <?= $row->fungsi; ?>
	                      </p>
	                    </blockquote>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header bg-info" id="headingThree">
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
				  </div>   <?php } ?>
				  <div class="card">
				    <div class="card-header bg-info" id="headingFour">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          <strong>Pegawai & Staff</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				      <div class="card-body">
				      	<h5><i class="fa fa-user"></i> Pejabat</h5><hr>
				        <div class="table-responsive">
												<table class="table table-striped table-borderless table-hover">
													<thead class="bg-dark text-light">
														<tr>
															<th class="text-center" width="20%">Nama</th>
															<th class="text-center" width="20%">Jabatan</th>
															<th class="text-center" width="10%">NIP</th>
															<th class="text-center" width="10%">CP</th>
															<th class="text-center" width="10%">Golongan</th>
															<th class="text-center" width="10%">Foto</th>
															<th class="text-center" width="10%"><i class="fa fa-cog"></i> Aksi</th>
														</tr>
													</thead>
													<tbody>
													<?php  foreach ( $penjabat->result() as $row ) {
													?>
														<tr class="odd gradeX">
															<td><?= $row->nama; ?></td>
															<td><?= $row->jabatan; ?></td>
															<td><?= $row->nip; ?></td>
															<td><?= $row->cp; ?></td>
															<td><?= $row->golongan; ?></td>
															<td><img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" style="width:100;" class="img-responsive"></td>
															<td class="text-center">
															<div class="btn-group">
																<a class="btn btn-outline-warning btn-sm" href="#" data-toggle="modal" data-target="#EditPejabat<?php echo $row->id; ?>" title="Edit"><i class="fa fa-edit"></i> Edit</a>
															 </div>
															</td>
														</tr>
													   <?php } ?>
													</tbody>
												</table>
											</div> 
										<hr>
										<div class="row">
										<div class="container">
										<h5 class="float-left"><i class="fa fa-users"></i> Anggota</h5>
										<button type="button" href="#" data-toggle="modal" data-target="#ModalAnggota" class="btn btn-outline-primary btn-sm float-right"><i class="fa fa-plus"></i> Tambah Data Anggota</button>
										</div></div><hr>
										   <div class="table-responsive">
												<table class="table table-striped table-borderless table-hover" id="dataTables-example">
													<thead class="bg-dark text-light">
														<tr>
															<th class="text-center" width="20%">Nama</th>
															<th class="text-center" width="10%">Bidang</th>
															<th class="text-center" width="20%">Jabatan</th>
															<th class="text-center" width="10%">NIP</th>
															<th class="text-center" width="10%">CP</th>
															<th class="text-center" width="5%">Gol</th>
															<th class="text-center" width="10%">Foto</th>
															<th class="text-center" width="15%"><i class="fa fa-cog"></i> Aksi</th>
														</tr>
													</thead>
													<tbody>
													<?php  foreach ( $anggota->result() as $row ) {
													?>
														<tr class="odd gradeX">
															<td><?= $row->nama_anggota; ?></td>
															<td><?= $row->jabatan; ?></td>
															<td><?= $row->jabatan_anggota; ?></td>
															<td><?= $row->nip_anggota; ?></td>
															<td><?= $row->cp_anggota; ?></td>
															<td><?= $row->gol_anggota; ?></td>
															<td><img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar_anggota; ?>" style="width:100;" class="img-responsive"></td>
															<td class="text-center">
															<div class="btn-group">
																<a class="btn btn-outline-warning btn-sm" href="#" data-toggle="modal" data-target="#EditAnggota<?php echo $row->id_anggota; ?>" title="Edit"><i class="fa fa-edit"></i></a>
																<a class="btn btn-outline-danger btn-sm" href="<?php echo base_url()?>admin/profil/hapus_anggota/<?php echo $row->id_anggota; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama_anggota;?>?')"><i class="fa fa-times"></i></a>
															 </div>
															</td>
														</tr>
													   <?php } ?>
													</tbody>
												</table>
											</div> 
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
</main>
