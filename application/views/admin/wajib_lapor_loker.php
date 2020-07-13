<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">P2K2</li>
                <li class="breadcrumb-item active" aria-current="page">Wajib Lapor Lowongan Kerja</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Wajib Lapor Lowongan Kerja</h3>
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
      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalWajibLapor"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
    </div><br>
            <!-- start: Accordion -->
           <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="10%">Nama Perusahaan</th>
                                            <th class="text-center" width="10%">Posisi</th>
                                            <th class="text-center" width="10%">Penempatan</th>
                                            <th class="text-center" width="10%">Pendidikan Terakhir</th>
                                            <th class="text-center" width="10%">Usia Minimal</th>
                                            <th class="text-center" width="10%">Jenis Kelamin</th>
                                            <th class="text-center" width="10%">Status Karyawan</th>
                                            <th class="text-center" width="10%">Gaji</th>
                                            <th class="text-center" width="10%"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($wl_naker->result() as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row->nama_perusahaan; ?></td>
                                            <td><?= $row->posisi; ?></td>
                                            <td><?= $row->penempatan;?></td>
                                            <td><?= $row->pendidikan;?></td>
                                            <td><?= $row->usia;?></td>
                                            <td><?= $row->jenis_kelamin;?></td>
                                            <td><?= $row->status;?></td>
                                            <td><?= $row->gaji;?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPerusahaan<?php echo $row->id_perusahaan; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url()?>admin/wajib_lapor_loker/hapus/<?php echo $row->id_perusahaan; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama_perusahaan;?>?')"><i class="fa fa-times"></i></a>
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
