<?php foreach ($nama as $row2) {
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">P2K2</li>
                        <li class="breadcrumb-item active" aria-current="page">Penempatan BKK</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Data Penempatan Bursa Kerja Khusus <br> <?php echo $row2->nama_sekolah; ?></h3>
                <p class="text-center"><?php echo $row2->alamat; ?></p>
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
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalBKK"><i class="fa fa-plus fa-fw"></i>Tambah Data</button>
                    <button href="#" class="btn btn-outline-danger btn-sm" type="button" data-toggle="modal" data-target="#ModalFilterSekolah"><i class="fa fa-file fa-fw"></i> Filter Sekolah</button>
                </div><br>
                <!-- start: Accordion -->
                <div class="table-responsive">
                    <table class="table table-striped table-borderless table-hover" id="dataTables-example">
                        <thead class="bg-info text-light">
                            <tr>
                                <th class="text-center" width="100">Nama Sekolah</th>
                                <th class="text-center" width="100">Nama</th>
                                <th class="text-center" width="50">Jenis Kelamin</th>
                                <th class="text-center" width="50">Umur</th>
                                <th class="text-center" width="100">Jurusan</th>
                                <th class="text-center" width="50">Posisi</th>
                                <th class="text-center" width="50">Perusahaan</th>
                                <th class="text-center" width="50"><i class="fa fa-cog"></i> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bursa_khusus->result() as $row) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $row->nama_sekolah; ?></td>
                                    <td><?= $row->nama; ?></td>
                                    <td><?= $row->jk; ?></td>
                                    <td><?= $row->umur; ?></td>
                                    <td><?= $row->jurusan; ?></td>
                                    <td><?= $row->posisi; ?></td>
                                    <td><?= $row->perusahaan; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-warning btn-sm btn-circle" href="#" data-toggle="modal" data-target="#EditBkk<?php echo $row->id_bkk; ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-outline-danger btn-sm btn-circle" href="<?php echo base_url() ?>admin/penempatan_bkk/hapus/<?php echo $row->id_bkk; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->nama; ?> ? Data yang sudah terhapus, tidak dapat dikembalikan lagi.')"><i class="fa fa-times"></i></a>
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