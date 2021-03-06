<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penempatan_kerja extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->model('Model_penempatan_kerja');
        $data['penempatan'] = $this->Model_penempatan_kerja->tampil_data();
        $data['idmax'] = $this->Model_penempatan_kerja->idmax();
        $data['company'] = $this->Model_penempatan_kerja->company();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/penempatan_kerja', $data);
        $this->load->view('modals/tambah_penempatan');
        $this->load->view('modals/cetak_penempatan_kerja');
        $this->load->view('edit/edit_penempatan', $data);
        $this->load->view('templates/footer_admin');
    }

    public function perusahaan()
    {
        $this->load->model('Model_penempatan_kerja');
        $data['penempatan'] = $this->Model_penempatan_kerja->tampil_perusahaan();
        $data['idmax'] = $this->Model_penempatan_kerja->idmax();
        $data['company'] = $this->Model_penempatan_kerja->company();
        $data['nama_perusahaan'] = $this->Model_penempatan_kerja->nama_perusahaan();
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/penempatan_kerja_perusahaan', $data);
        $this->load->view('modals/tambah_penempatan_perusahaan');
        $this->load->view('modals/cetak_penempatan_kerja_perusahaan');
        $this->load->view('edit/edit_penempatan_perusahaan', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('penempatan', 'Penempatan', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lk', 'Jumlah Laki-Laki', 'required');
        $this->form_validation->set_rules('pr', 'Jumlah Perempuan', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/penempatan_kerja');
        } else {
            $id_penempatan = $this->input->post('id', true);
            $nama_perusahaan = $this->input->post('nama_perusahaan', true);
            $posisi = $this->input->post('posisi', true);
            $penempatan = $this->input->post('penempatan', true);
            $pendidikan = $this->input->post('pendidikan', true);
            $umur = $this->input->post('umur', true);
            $status = $this->input->post('status', true);
            $bulan = $this->input->post('bulan', true);
            $tahun = $this->input->post('tahun', true);
            $lk = $this->input->post('lk', true);
            $pr = $this->input->post('pr', true);

            $data = array(
                'id_penempatan' => $id_penempatan,
                'nama_perusahaan' => $nama_perusahaan,
                'posisi' => $posisi,
                'penempatan' => $penempatan,
                'pendidikan' => $pendidikan,
                'umur' => $umur,
                'status' => $status,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'lk' => $lk,
                'pr' => $pr
            );
            $this->load->model('Model_penempatan_kerja');
            $this->Model_penempatan_kerja->tambah_data($data);
            $this->session->set_flashdata("berhasil", "Tambah data <b>$nama_perusahaan</b> berhasil !");
            echo '<script>history.back(self)</script>';
        }
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('penempatan', 'Penempatan', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('lk', 'Jumlah Laki-Laki', 'required');
        $this->form_validation->set_rules('pr', 'Jumlah Perempuan', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('admin/penempatan_kerja');
        } else {
            $id_penempatan = $this->input->post('id_penempatan', true);
            $nama_perusahaan = $this->input->post('nama_perusahaan', true);
            $posisi = $this->input->post('posisi', true);
            $penempatan = $this->input->post('penempatan', true);
            $pendidikan = $this->input->post('pendidikan', true);
            $umur = $this->input->post('umur', true);
            $status = $this->input->post('status', true);
            $bulan = $this->input->post('bulan', true);
            $tahun = $this->input->post('tahun', true);
            $lk = $this->input->post('lk', true);
            $pr = $this->input->post('pr', true);

            $data = array(
                'id_penempatan' => $id_penempatan,
                'nama_perusahaan' => $nama_perusahaan,
                'posisi' => $posisi,
                'penempatan' => $penempatan,
                'pendidikan' => $pendidikan,
                'umur' => $umur,
                'status' => $status,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'lk' => $lk,
                'pr' => $pr
            );
            $this->load->model('Model_penempatan_kerja');
            $this->Model_penempatan_kerja->ubah_data($data, $id_penempatan);
            $this->session->set_flashdata("berhasil", "Ubah data <b>$nama_perusahaan</b> berhasil !");
            echo '<script>history.back(self)</script>';
        }
    }

    public function hapus($id_penempatan)
    {
        $this->db->where('id_penempatan', $id_penempatan);
        $query = $this->db->get('penempatan_kerja');
        $row = $query->row();

        $this->load->model('Model_penempatan_kerja');
        $this->Model_penempatan_kerja->delete($id_penempatan);
        $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_perusahaan</b> berhasil !");

        echo '<script>history.back(self)</script>';
    }

    public function cetak()
    {
        $this->load->library('Pdf');
        $bulan = $this->input->post('bulan', true);
        $tahun = $this->input->post('tahun', true);
        $this->load->model('Model_penempatan_kerja');
        $data['cetak_penempatan'] = $this->Model_penempatan_kerja->cetak_penempatan($bulan, $tahun);
        $this->load->view('eksport/pdf_penempatan_kerja', $data);
    }

    public function cetak_perusahaan()
    {
        $this->load->library('Pdf');
        $bulan = $this->input->post('bulan', true);
        $tahun = $this->input->post('tahun', true);
        $perusahaan = $this->input->post('nama_perusahaan', true);
        $this->load->model('Model_penempatan_kerja');
        $data['cetak_penempatan'] = $this->Model_penempatan_kerja->cetak_penempatan_perusahaan($bulan, $tahun, $perusahaan);
        $this->load->view('eksport/pdf_penempatan_kerja', $data);
    }
}
