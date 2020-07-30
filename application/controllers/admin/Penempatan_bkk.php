<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penempatan_bkk extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        $this->load->model('Model_penempatan_bkk');
    }

    public function index()
    {
        $this->load->model('Model_penempatan_bkk');
        $data['bursa_khusus'] = $this->Model_penempatan_bkk->tampil_data();
        $data['idmax'] = $this->Model_penempatan_bkk->idmax();
        $data['sekolah'] = $this->Model_penempatan_bkk->tampil_sekolah();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/penempatan_bkk', $data);
        $this->load->view('modals/tambah_penempatan_bkk');
        $this->load->view('edit/edit_penempatan_bkk', $data);
        $this->load->view('templates/footer_admin');
    }

    public function bkk_sekolah()
    {
        $this->load->model('Model_penempatan_bkk');
        $data['bursa_khusus'] = $this->Model_penempatan_bkk->bursa_sekolah();
        $data['idmax'] = $this->Model_penempatan_bkk->idmax();
        $data['nama'] = $this->Model_penempatan_bkk->sekolah();
        $data['sekolah'] = $this->Model_penempatan_bkk->tampil_sekolah();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/penempatan_bkk_sekolah', $data);
        $this->load->view('modals/tambah_penempatan_bkk_sekolah');
        $this->load->view('edit/edit_penempatan_bkk_sekolah', $data);
        $this->load->view('modals/cetak_filter_sekolah', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama_sekolah', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/penempatan_bkk');
        } else {
            $id = $this->input->post('id', true);
            $nama = $this->input->post('nama', true);
            $jk = $this->input->post('jk', true);
            $umur = $this->input->post('umur', true);
            $jurusan = $this->input->post('jurusan', true);
            $posisi = $this->input->post('posisi', true);
            $perusahaan = $this->input->post('perusahaan', true);
            $nama_sekolah = $this->input->post('nama_sekolah', true);

            $data = array(
                'id_bkk' => $id,
                'nama' => $nama,
                'jk' => $jk,
                'umur' => $umur,
                'jurusan' => $jurusan,
                'posisi' => $posisi,
                'perusahaan' => $perusahaan,
                'nama_sekolah' => $nama_sekolah,
            );

            $this->load->model('Model_penempatan_bkk');
            $this->Model_penempatan_bkk->tambah_data($data);
            $this->session->set_flashdata("berhasil", "Tambah data <b>$nama</b> berhasil !");
            echo '<script>history.back(self)</script>';
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama_sekolah', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/penempatan_bkk');
        } else {
            $id = $this->input->post('id_bkk', true);
            $nama = $this->input->post('nama', true);
            $jk = $this->input->post('jk', true);
            $umur = $this->input->post('umur', true);
            $jurusan = $this->input->post('jurusan', true);
            $posisi = $this->input->post('posisi', true);
            $perusahaan = $this->input->post('perusahaan', true);
            $nama_sekolah = $this->input->post('nama_sekolah', true);

            $data = array(
                'id_bkk' => $id,
                'nama' => $nama,
                'jk' => $jk,
                'umur' => $umur,
                'jurusan' => $jurusan,
                'posisi' => $posisi,
                'perusahaan' => $perusahaan,
                'nama_sekolah' => $nama_sekolah,
            );

            $this->load->model('Model_penempatan_bkk');
            $this->Model_penempatan_bkk->ubah_data($data, $id);
            $this->session->set_flashdata("berhasil", "Ubah data <b>$nama</b> berhasil !");
            echo '<script>history.back(self)</script>';
        }
    }

    public function hapus($id_bkk)
    {
        $this->db->where('id_bkk', $id_bkk);
        $query = $this->db->get('penempatan_bkk');
        $row = $query->row();
        $this->load->model('Model_penempatan_bkk');
        $this->Model_penempatan_bkk->delete($id_bkk);
        $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama</b> berhasil !");
        echo '<script>history.back(self)</script>';
    }

    public function cetak()
    {
        $this->load->library('Pdf');
        $sekolah = $this->input->post('sekolah', true);
        $tahun = $this->input->post('tahun', true);
        $this->load->model('Model_penempatan_bkk');
        $data['get_sekolah'] = $this->Model_penempatan_bkk->get_sekolah($sekolah);
        $data['cetak_bk'] = $this->Model_penempatan_bkk->cetak_bk($sekolah, $tahun);
        $this->load->view('eksport/pdf_filter_sekolah_enaker', $data);
    }
}
