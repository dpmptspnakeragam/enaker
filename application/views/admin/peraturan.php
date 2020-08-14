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
            <div class="col-lg-12">
                <h3 class="text-center">Informasi</h3>
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
                    <button href="tambahp.php" type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalAturan"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-info text-light">
                            <tr>
                                <th class="text-center">Nama Peraturan</th>
                                <th class="text-center">Peraturan</th>
                                <th class="text-center">File</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($peraturan->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $row->nama_peraturan; ?></td>
                                    <td><?= $row->isi_peraturan; ?></td>
                                    <td><a href="<?= base_url(); ?>assets/fileupload/<?= $row->peraturan; ?>" class="btn btn-sm btn-outline-success">
                                            <i class="fa fa-eye ">
                                            </i> Lihat
                                        </a></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-outline-warning btn-circle btn-sm" data-toggle="modal" data-target="#EditAturan<?php echo $row->id; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-outline-danger btn-circle btn-sm" href="<?php echo base_url() ?>admin/peraturan/hapus/<?php echo $row->id; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama_peraturan; ?>?')"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-info text-light">
                            <tr>
                                <th class="text-center">Data Perencanaan</th>
                                <th class="text-center">File</th>
                                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_perencanaan->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $row->nama_renstra; ?></td>
                                    <td><a href="<?= base_url(); ?>assets/fileupload/<?= $row->file_renstra; ?>" class="btn btn-sm btn-outline-success">
                                            <i class="fa fa-eye ">
                                            </i> Lihat
                                        </a></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-outline-warning btn-circle btn-sm" data-toggle="modal" data-target="#EditRenstra<?php echo $row->id_renstra; ?>" title="Edit"><i class="fa fa-edit"></i></button>
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