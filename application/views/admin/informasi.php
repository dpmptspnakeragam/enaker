<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Informasi</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Informasi</h3>
			<hr>
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
      <button type="button" href="" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalInfo"><i class="fa fa-plus fa-fw"></i> Tambah Data</button>
    </div><hr>
            <!-- start: Accordion -->
            <div class="accordion" id="accordionExample" style="padding-bottom: 30px;">
				  <div class="card">
				    <div class="card-header bg-info" id="headingOne">
				      <h4 class="mb-0">
				        <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          <strong>Berita Umum</strong>
				        </button>
				      </h4>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th class="text-center" style="width:30%;">Judul Berita</th>
                                            <th class="text-center" style="width:20%;">Isi Berita</th>
                                            <th class="text-center" style="width:20%;">Gambar Berita</th>
                                            <th class="text-center" style="width:10%;">Tanggal Terbit</th>
                                            <th class="text-center" style="width:10%;">Pengirim</th>
                                            <th class="text-center" style="width:10%;"><i class="fa fa-cog"></i> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ( $berita->result() as $row ) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row->judul_berita; ?></td>
                                            <td><?= $row->isi_berita; ?></td>
                                            <td class="text-center"><img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" style="width:95%;" class="img-responsive"></td>
                                            <td class="text-center"><?= $row->tgl_berita; ?></td>
                                            <td class="text-center"><?= $row->pengirim_berita; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditInfo<?php echo $row->id_berita; ?>"><i class="fa fa-edit"></i></a>
            
                                                <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url()?>admin/informasi/hapus/<?php echo $row->id_berita; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->judul_berita;?>?')"><i class="fa fa-times"></i></a>
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
				  <div class="card">
				    <div class="card-header bg-info" id="headingTwo">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <strong>Lowongan Kerja</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				        <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th class="text-center" width="10%">Judul</th>
                                            <th class="text-center" width="25%">Isi</th>
                                            <th class="text-center" width="15%">Keterangan</th>
                                            <th class="text-center" width="10%">Gambar</th>
                                            <th class="text-center" width="10%">Link Terkait</th>
                                            <th class="text-center" width="10%">Tanggal Terbit</th>
                                            <th class="text-center" width="10%">Jenis</th>
                                            <th class="text-center" width="10%"><i class="fa fa-cog"></i> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ( $lowongan->result() as $row2 ) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row2->judul_berita; ?></td>
                                            <td><?= $row2->isi_berita; ?></td>
                                            <td><?= $row2->syarat;?></td>
                                            <td><img src="<?= base_url(); ?>assets/imgupload/<?= $row2->gambar; ?>" style="width:95%;" class="img-responsive"></td>
                                            <td class="text-center"><a href="<?= $row2->alamat;?>" type="button" class="btn btn-primary ">Kunjungi</a></td>
                                            <td class="text-center"><?= $row2->tgl_berita; ?></td>
                                            <td class="text-center"><?= $row2->nama_jenis;?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditInfo<?php echo $row2->id_berita; ?>"><i class="fa fa-edit"></i></a>
                                     
                                                <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url()?>admin/informasi/hapus/<?php echo $row2->id_berita; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row2->judul_berita;?>?')"><i class="fa fa-times"></i></a>
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
				  <div class="card">
				    <div class="card-header bg-info" id="headingFour">
				      <h4 class="mb-0">
				        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          <strong>Job Fair</strong>
				        </button>
				      </h4>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				      <div class="card-body">
				      	<div class="row">
				        <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example" >
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th class="text-center" width="10%">Judul</th>
                                            <th class="text-center" width="20%">Isi</th>
                                            <th class="text-center" width="10%">Keterangan</th>
                                            <th class="text-center" width="10%">Gambar</th>
                                            <th class="text-center" width="10%">Link Terkait</th>
                                            <th class="text-center" width="10%">Tanggal Terbit</th>
                                            <th class="text-center" width="10%"><i class="fa fa-cog"></i> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ( $jobfair->result() as $row3 ) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row3->judul_berita; ?></td>
                                            <td><?= $row3->isi_berita; ?></td>
                                            <td><?= $row3->syarat;?></td>
                                            <td class="text-center"><img src="<?= base_url(); ?>assets/imgupload/<?= $row3->gambar; ?>" style="width:95%;" class="img-responsive"></td>
                                            <td><a href="<?= $row3->alamat;?>" type="button" class="btn btn-primary ">Kunjungi </a></td>
                                            <td class="text-center"><?= $row3->tgl_berita; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditInfo<?php echo $row3->id_berita; ?>" ><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url()?>admin/informasi/hapus/<?php echo $row3->id_berita; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row3->judul_berita;?>?')"><i class="fa fa-times"></i></a>
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
