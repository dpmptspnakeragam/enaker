<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">HI dan Produktifitas</li>
                <li class="breadcrumb-item active" aria-current="page">Peserta Magang</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Peserta Magang</h3>
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
      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalPesertaMagang"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
    </div><br>
            <!-- start: Accordion -->
           <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example" width="2000px">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="5%">No</th>
                                            <th class="text-center" width="15%">Nama</th>
                                            <th class="text-center" width="15%">Alamat</th>
                                            <th class="text-center" width="10%">NIK</th>
                                            <th class="text-center" width="10%">Jenis Kelamin</th>
                                            <th class="text-center" width="10%">Tempat / Tanggal Lahir</th>
                                            <th class="text-center" width="10%">No. HP</th>
                                            <th class="text-center" width="10%">Pendidikan Terakhir</th>
                                            <th class="text-center" width="10%">Program Magang</th>
                                            <th class="text-center" width="10%">Ket. Kelulusan</th>
                                            <th class="text-center" width="10%"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    $no = 1;
                                    foreach ( $peserta_magang->result() as $row ) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $nama_peserta; ?></td>
                                            <td><?php echo $alamat; ?></td>
                                            <td><?php echo $no_ktp; ?></td>
                                            <td><?php echo $jenis_kelamin; ?></td>
                                            <td><?php echo $tmpt_lahir; ?>, <?php echo TanggalIndo($tgl_lahir); ?></td>
                                            <td><?php echo $no_hp; ?></td>
                                            <td><?php echo $pendidikan; ?></td>
                                            <td><?php echo $judul; ?></td>
                                            <td><?php echo $ket; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPesertaMagang<?php echo $row->id_pesertamagang; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                     
                                                <a class="btn btn-outline-danger btn-sm btn-circle" href="<?= base_url(); ?>admin/peserta_magang/hapus/<?php echo $id_pesertamagang; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?php echo $row->nama_peserta;?> ?')"><i class="fa fa-times"></i></a>
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
