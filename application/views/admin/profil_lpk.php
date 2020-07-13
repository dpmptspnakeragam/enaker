<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">HI dan Produktifitas</li>
                <li class="breadcrumb-item active" aria-current="page">Lembaga Pelatihan Kerja</li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Profil Lembaga Pelatihan Kerja</h3>
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
      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalProfilLPK"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
    </div><br>
            <!-- start: Accordion -->
            <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="20%">Nama Lembaga</th>
                                            <th class="text-center" width="20%">Alamat</th>
                                            <th class="text-center" width="10%">Pengurus</th>
                                            <th class="text-center" width="20%">Sejarah</th>
                                            <th class="text-center" width="20%">Gambar</th>
                                            <th class="text-center" width="10%"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ( $profillpk->result() as $row ) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row->nama_lpk; ?></td>
                                            <td><?= $row->alamat; ?></td>
                                            <td><?= $row->pengurus; ?></td>
                                            <td><?= $row->sejarah; ?></td>
                                            <td><img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" style="width:100;" class="img-responsive"></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditProfilLPK<?php echo $row->id_profil; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url()?>admin/profil_lpk/hapus/<?php echo $row->id_profil; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama_lpk;?>?')"><i class="fa fa-times"></i></a>
                                             </div>
                                            </td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>   <hr>
              <!--end: Accordion -->
              </div>
        	</div>
		</div>
	</div>
</div>
</main>
