<?php  
foreach ( $session as $row ) {}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">P2K2</li>
                <li class="breadcrumb-item active" aria-current="page">Data Pencari Kerja</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" style="">
			<h3 class="text-center">Data Pencari Kerja <br>Nagari "<?php echo $row->nama; ?>"</h3>
			<hr>
			<div class="panel-heading">
                <div class="alert alert-primary" role="alert">
                <h6>Total Data Pencari Kerja di Nagari <?php echo $row->nama; ?> :
                  <?php echo number_format($total_pencaker);?>
            </h6></div><hr>
      <button href="#" type="button" data-toggle="modal" data-target="#ModalPencaker" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
        <a href="<?php echo base_url()?>admin/pencaker/cetak_pencaker_nagari/<?php echo $row->id_nagari2; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-print fa-fw"></i> Export Data PDF</a>
        <!------------ <a href="<?php echo base_url()?>admin/pencaker/cetak_rekap_nagari/<?php echo $row->id_nagari2; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-print fa-fw"></i> Export Rekapitulasi PDF</a>--->
        <button href="#" class="btn btn-outline-danger btn-sm" type="button" data-toggle="modal" data-target="#ModalFilterPencakerNagari"><i class="fa fa-file fa-fw"></i> Filter Pelatihan</button>
        <button href="#" class="btn btn-outline-danger btn-sm" type="button" data-toggle="modal" data-target="#ModalFilterPendidikanNagari"><i class="fa fa-file fa-fw"></i> Filter Pendidikan</button>
        <button href="#" class="btn btn-outline-danger btn-sm" type="button" data-toggle="modal" data-target="#ModalFilterUmurNagari"><i class="fa fa-file fa-fw"></i> Filter Umur</button>
    </div><br>
            <!-- start: Accordion -->
            <div class="table-responsive">
                                <table class="display table table-striped table-borderless table-hover" id="dataTables-example" width="2000px">
                                    <thead class="bg-info text-light">
                                        <tr>
                                            <th class="text-center" width="auto">No</th>
                                            <th class="text-center" width="auto">Nama</th>
                                            <th class="text-center" width="auto">JK</th>
                                            <th class="text-center" width="auto">Tempat Lahir</th>
                                            <th class="text-center" width="auto">Tanggal Lahir</th>
                                            <th class="text-center" width="auto">Umur</th>
                                            <th class="text-center" width="auto">NIK</th>
                                            <th class="text-center" width="auto">Alamat Tetap</th>
                                            <th class="text-center" width="auto">No. HP / Telp.</th>
                                            <th class="text-center" width="auto">Pendidikan Terakhir</th>
                                            <th class="text-center" width="auto">Pekerjaan Yang Diinginkan</th>
                                            <th class="text-center" width="auto">Keterampilan Yang dimiliki</th>
                                            <th class="text-center" width="auto">Pelatihan Yang Diinginkan</th>
                                            <th class="text-center" width="auto"><i class="fa fa-cog"></i> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php  
                                $no = 1;
                                foreach ( $tampil_nagari as $row2 ) {
                                ?>
                                        <tr >
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row2->nama_lengkap; ?></td>
                                            <td><?php echo $row2->jk; ?></td>
                                            <td><?php echo $row2->tmpt_lahir; ?></td>
                                            <td><?php echo $row2->tgl_lahir; ?></td>
                                            <td><?php echo $row2->umur; ?></td>
                                            <td><?php echo $row2->nik; ?></td>
                                            <td><?php echo $row2->jorong; ?>, Nagari <?php echo $row2->nama_nagari2; ?>, Kecamatan <?php echo $row2->nama_nagari; ?></td>
                                            <td><?php echo $row2->phone; ?></td>
                                            <td><?php echo $row2->pendidikan; ?> <?php echo $row2->jurusan; ?></td>
                                            <td><?php echo $row2->pekerjaan; ?></td>
                                            <td><?php echo $row2->keterampilan; ?></td>
                                            <td><?php echo $row2->pelatihan; ?></td>
                                            <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPencaker<?php echo $row2->id_penganggur; ?>"><i class="fa fa-edit"></i></a>
                                     
                                                <a class="btn btn-outline-danger btn-sm btn-circle"  href="<?= base_url(); ?>admin/pencaker/hapus/<?php echo $row2->id_penganggur; ?>" onclick="javascript: return confirm('Anda yakin hapus <?php echo $row2->nama_lengkap;?> ?')"><i class="fa fa-times"></i></a>
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
