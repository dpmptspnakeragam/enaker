<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">P2K2</li>
                <li class="breadcrumb-item active" aria-current="page">Bursa Kerja Khusus</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Bursa Kerja Khusus</h3>
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
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalBursaKhusus"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
        <button href="#" class="btn btn-outline-danger btn-sm" type="button" data-toggle="modal" data-target="#ModalFilterSekolah"><i class="fa fa-file fa-fw"></i> Filter Sekolah</button>
    </div><br>
            <!-- start: Accordion -->
          <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="150" rowspan="2">Nama Sekolah</th>
                                            <th class="text-center" width="50" colspan="2">Penempatan Alumni</th>
                                            <th class="text-center" width="50" rowspan="2">Total</th>
                                            <th class="text-center" width="100" rowspan="2">Perusahaan / Instansi</th>
                                            <th class="text-center" width="50" rowspan="2">Tahun</th>
                                            <th class="text-center" width="50" rowspan="2"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" width="100">Laki-laki</th>
                                            <th class="text-center" width="100">Perempuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach ( $bursa_khusus->result() as $row ) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row->sekolah; ?></td>
                                            <td><?= $row->lk; ?> Orang</td>
                                            <td><?= $row->pr; ?> Orang</td>
                                            <td><?= $row->lk+$row->pr; ?> Orang</td>
                                            <td><?= $row->instansi; ?></td>
                                            <td><?= $row->tahun; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditBK<?php echo $row->id_bk; ?>"  title="Edit"><i class="fa fa-edit"></i></a>
                                     
                                                <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url()?>admin/bursa_khusus/hapus/<?php echo $row->id_bk; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->sekolah;?> ? Data yang sudah terhapus, tidak dapat dikembalikan lagi.')"><i class="fa fa-times"></i></a>
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
