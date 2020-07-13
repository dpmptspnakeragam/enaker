<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">UPT Balai Latihan Kerja</li>
                <li class="breadcrumb-item active" aria-current="page">Peserta BLK</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Peserta</h3>
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
      <button href="" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalPesertablk"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
    </div><br>
            <!-- start: Accordion -->
           <div class="table-responsive">
                                <table class="table table-striped table-borderless table-hover" id="dataTables-example" width="2000px">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" style="width:5%;">No</th>
                                            <th class="text-center" style="width:15%;">Nama</th>
                                            <th class="text-center" style="width:20%;">Alamat</th>
                                            <th class="text-center" style="width:10%;">NIK</th>
                                            <th class="text-center" style="width:10%;">Jenis Kelamin</th>
                                            <th class="text-center" style="width:10%;">Tempat / Tanggal Lahir</th>
                                            <th class="text-center" style="width:10%;">No. HP</th>
                                            <th class="text-center" style="width:10%;">Pendidikan Terakhir</th>
                                            <th class="text-center" style="width:10%;">Sub Kejuruan</th>
                                            <th class="text-center" style="width:10%;">Ket. Kelulusan</th>
                                            <th class="text-center" style="width:15%;"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    $no = 1;
                                    foreach ( $peserta_blk->result() as $row ) {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nama_peserta; ?></td>
                                            <td><?= $row->alamat; ?></td>
                                            <td><?= $row->no_ktp; ?></td>
                                            <td><?= $row->jenis_klamin; ?></td>
                                            <td><?= $row->tmpt_lahir; ?>, <?= $row->tgl_lahir; ?></td>
                                            <td><?= $row->no_hp; ?></td>
                                            <td><?= $row->pendidikan; ?></td>
                                            <td><?= $row->pelatihan; ?></td>
                                            <td><?= $row->ket; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-circle btn-sm" href="#" data-toggle="modal" data-target="#EditPesertaBLK<?= $row->id_peserta; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                      
                                                <a class="btn btn-outline-danger btn-circle btn-sm" href="<?= base_url(); ?>admin/peserta_blk/hapus/<?= $row->id_peserta; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama_peserta;?> ?')"><i class="fa fa-times"></i></a>
                                             </div>
                                            </td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>  <hr>
              <!--end: Accordion -->
              </div>
        	</div>
		</div>
	</div>
</div>
</main>