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
            <div class="col-lg-12">
                <h3 class="text-center">Data Peserta Magang</h3>
                <hr>
                <div class="panel-heading">
                    <?php if ($this->session->flashdata('gagal')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('gagal'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('berhasil')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('berhasil'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalPesertaMagang"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example" width="2000px">
                        <thead class="bg-info text-light">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tempat / Tanggal Lahir</th>
                                <th class="text-center">No. HP</th>
                                <th class="text-center">Pendidikan Terakhir</th>
                                <th class="text-center">Program Magang</th>
                                <th class="text-center">Ket. Kelulusan</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta_magang->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nama_peserta; ?></td>
                                    <td><?= $row->alamat; ?></td>
                                    <td><?= $row->no_ktp; ?></td>
                                    <td><?= $row->jenis_kelamin; ?></td>
                                    <td><?= $row->tmpt_lahir; ?>, <?= $row->tgl_lahir; ?></td>
                                    <td><?= $row->no_hp; ?></td>
                                    <td><?= $row->pendidikan; ?></td>
                                    <td><?= $row->judul; ?></td>
                                    <td><?= $row->ket; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditPesertaMagang<?= $row->id_pesertamagang; ?>" title="Edit"><i class="fa fa-edit"></i></a>

                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?= base_url(); ?>admin/peserta_magang/hapus/<?= $row->id_pesertamagang; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama_peserta; ?> ?')"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <!--end: Accordion -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>