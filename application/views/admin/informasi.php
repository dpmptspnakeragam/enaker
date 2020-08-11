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
          <button type="button" href="" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#ModalInfo"><i class="fa fa-plus fa-fw"></i> Tambah Data</button>
        </div>
        <hr>
        <div class="table-responsive">
          <table class="table table-striped table-borderless table-hover" id="dataTables-example">
            <thead class="bg-dark text-light">
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Judul Berita</th>
                <th class="text-center">Isi Berita</th>
                <th class="text-center">Gambar Berita</th>
                <th class="text-center">Tanggal Terbit</th>
                <th class="text-center">Pengirim</th>
                <th class="text-center">Link Terkait</th>
                <th class="text-center">Syarat</th>
                <th class="text-center">Jenis</th>
                <th class="text-center"><i class="fa fa-cog"></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($berita->result() as $row) {
              ?>
                <tr class="odd gradeX">
                  <td><?= $no++; ?></td>
                  <td><?= $row->judul_berita; ?></td>
                  <td><?= $row->isi_berita; ?></td>
                  <td class="text-center"><img src="<?= base_url(); ?>assets/imgupload/<?= $row->gambar; ?>" style="width:95%;" class="img-responsive"></td>
                  <td class="text-center"><?= $row->tgl_berita; ?></td>
                  <td class="text-center"><?= $row->pengirim_berita; ?></td>
                  <td class="text-center"><?= $row->alamat; ?></td>
                  <td class="text-center"><?= $row->syarat; ?></td>
                  <td class="text-center"><?= $row->nama_jenis; ?></td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="#" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#EditInfo<?php echo $row->id_berita; ?>"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url() ?>admin/informasi/hapus/<?php echo $row->id_berita; ?>" title="Hapus" onclick="javascript: return confirm('Anda yakin hapus <?= $row->judul_berita; ?>?')"><i class="fa fa-times"></i></a>
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
</main>