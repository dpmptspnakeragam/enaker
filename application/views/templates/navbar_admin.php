<nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url(); ?>admin/home">
    <img src="<?= base_url(); ?>assets/img/logoenaker(new)putih.png" width="30px" height="30px" alt="Logo Naker"> e-Naker</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?= base_url(); ?>admin/home/logout"><i class="fa fa-sign-out-alt"></i> Log Out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php
          if ($this->session->userdata('hak_akses') == "upt") { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/home">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                <span data-feather="users"></span>
                UPT Balai Latihan Kerja
              </a>
              <div class="collapse" id="collapse1">
                <ul>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/profil_blk">Profil</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/pelatihan">Pelatihan</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/peserta_blk">Peserta</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/alumni_blk">Alumni</a></li>
                </ul>
              </div>
            </li>
            </li>
        </ul>
      <?php } elseif ($this->session->userdata('hak_akses') == "hi") { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
            <span data-feather="users"></span>
            UPT Balai Latihan Kerja
          </a>
          <div class="collapse" id="collapse1">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/profil_blk">Profil</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/pelatihan">Pelatihan</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/peserta_blk">Peserta</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/alumni_blk">Alumni</a></li>
            </ul>
          </div>
        </li>
        </li>
        <li class="nav-item ">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
            <span data-feather="globe"></span>
            HI dan Produktifitas
          </a>
          <div class="collapse" id="collapse2">
            <ul>
              <li><a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">Pemagangan</a></li>
              <div class="collapse" id="collapse3">
                <ul>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/pemagangan">Data Magang</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/peserta_magang">Data Peserta</a></li>
                </ul>
              </div>
              <li><a class="nav-link" href="sarana_hi.php">Sarana HI</a></li>
              <li><a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">Lembaga Pelatihan Kerja</a></li>
              <div class="collapse" id="collapse4">
                <ul>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/profil_lpk">Profil</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/jumlah_latih">Jumlah Yang Dilatih</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/alumni_lpk">Alumni</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </li>
        </ul>
      <?php } elseif ($this->session->userdata('hak_akses') == "p2k2") { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
            <span data-feather="briefcase"></span>
            P2K2
          </a>
          <div class="collapse" id="collapse5">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/pencaker">Data Pencari Kerja</a></li>
              <!---<li><a class="nav-link" href="<?= base_url(); ?>admin/bursa_kerja">Bursa Kerja</a></li>--->
              <li><a class="nav-link" href="<?= base_url(); ?>admin/bursa_khusus">Bursa Kerja Khusus</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/penempatan_kerja">Penempatan Kerja</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/wajib_lapor_loker">Wajib Lapor Lowongan Kerja</a></li>
            </ul>
          </div>
        </li>
        </ul>
      <?php } elseif ($this->session->userdata('hak_akses') == "nagari") { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
            <span data-feather="briefcase"></span>
            P2K2
          </a>
          <div class="collapse" id="collapse5">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/pencaker/detail_pencaker">Data Pencari Kerja</a></li>
            </ul>
          </div>
        </li>
        </ul>
      <?php } elseif ($this->session->userdata('hak_akses') == "kecamatan") { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
            <span data-feather="briefcase"></span>
            P2K2
          </a>
          <div class="collapse" id="collapse5">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/pencaker/kecamatan">Data Pencari Kerja</a></li>
            </ul>
          </div>
        </li>
        </ul>
      <?php } elseif ($this->session->userdata('hak_akses') == "sekolah") { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
            <span data-feather="briefcase"></span>
            P2K2
          </a>
          <div class="collapse" id="collapse5">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/penempatan_bkk/bkk_sekolah">Bursa Kerja Khusus</a></li>
            </ul>
          </div>
        </li>
        </ul>
      <?php } elseif ($this->session->userdata('hak_akses') == "perusahaan") { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
            <span data-feather="briefcase"></span>
            P2K2
          </a>
          <div class="collapse" id="collapse5">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/penempatan_kerja/perusahaan">Penempatan Kerja</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/wajib_lapor_loker/perusahaan">Wajib Lapor Lowongan Kerja</a></li>
            </ul>
          </div>
        </li>
        </ul>
      <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/profil">
            <span data-feather="user"></span>
            Profil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/informasi">
            <span data-feather="info"></span>
            Informasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/peraturan">
            <span data-feather="book"></span>
            Peraturan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
            <span data-feather="users"></span>
            UPT Balai Latihan Kerja
          </a>
          <div class="collapse" id="collapse1">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/profil_blk">Profil</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/pelatihan">Pelatihan</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/peserta_blk">Peserta</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/alumni_blk">Alumni</a></li>
            </ul>
          </div>
        </li>
        </li>
        <li class="nav-item ">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
            <span data-feather="globe"></span>
            HI dan Produktifitas
          </a>
          <div class="collapse" id="collapse2">
            <ul>
              <li><a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">Pemagangan</a></li>
              <div class="collapse" id="collapse3">
                <ul>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/pemagangan">Data Magang</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/peserta_magang">Data Peserta</a></li>
                </ul>
              </div>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/sarana_hi">Sarana HI</a></li>
              <li><a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">Lembaga Pelatihan Kerja</a></li>
              <div class="collapse" id="collapse4">
                <ul>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/profil_lpk">Profil</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/jumlah_latih">Jumlah Yang Dilatih</a></li>
                  <li><a class="nav-link" href="<?= base_url(); ?>admin/alumni_lpk">Alumni</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
            <span data-feather="briefcase"></span>
            P2K2
          </a>
          <div class="collapse" id="collapse5">
            <ul>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/pencaker">Data Pencari Kerja</a></li>
              <!---<li><a class="nav-link" href="<?= base_url(); ?>admin/bursa_kerja">Bursa Kerja</a></li>--->
              <li><a class="nav-link" href="<?= base_url(); ?>admin/penempatan_bkk">Bursa Kerja Khusus</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/penempatan_kerja">Penempatan Kerja</a></li>
              <li><a class="nav-link" href="<?= base_url(); ?>admin/wajib_lapor_loker">Wajib Lapor Lowongan Kerja</a></li>
            </ul>
          </div>
        </li>
        <!---<li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>admin/galeri">
            <span data-feather="camera"></span>
            Foto Kegiatan
          </a>
        </li>--->
        </ul>
      <?php } ?>
      </ul>
      </div>
    </nav>