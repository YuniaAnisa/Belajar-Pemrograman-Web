
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelola_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('Kelola_model');
        $data['title'] = 'Data Rekam Medis';
        $data['rekamedis'] = $this->Kelola_model->getAllRekamedis();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelola_data/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Rekam Medis';

        $this->form_validation->set_rules('id_rekamedis', 'Id Rekam Medis', 'required');
        $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required');
        $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('obat', 'Obat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelola_data/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kelola_model->tambahDataRekamedis();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelola_data');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Kelola_model');
        $this->Kelola_model->hapusDataRekamedis($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelola_data');
    }

    public function ubah_rekamedis($id)
    {
        $data['title'] = 'Edit Data Rekam Medis';
        $data['rekamedis'] = $this->Kelola_model->getRekamedisById($id);


        $this->form_validation->set_rules('id_rekamedis', 'Id Rekam Medis', 'required');
        $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required');
        $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('obat', 'Obat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kelola_data/ubah_rekamedis', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelola_model->ubahDataRekamedis();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelola_data');
        }
    }

    public function resep()
    {
        $this->load->model('Kelola_model');
        $data['title'] = 'Data Resep';
        $data['resep'] = $this->Kelola_model->getAllResep();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelola_data/resep', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_resep()
    {
        $data['title'] = 'Form Tambah Data Resep';

        $this->form_validation->set_rules('id_resep', 'Id Resep', 'required');
        $this->form_validation->set_rules('id_rekamedis', 'Id Rekam Medis', 'required');
        $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required');
        $this->form_validation->set_rules('obat', 'Obat', 'required');
        $this->form_validation->set_rules('dosis', 'Dosis', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelola_data/tambah_resep');
            $this->load->view('templates/footer');
        } else {
            $this->Kelola_model->tambahDataResep();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelola_data/resep');
        }
    }

    public function hapus_resep($id)
    {
        $this->load->model('Kelola_model');
        $this->Kelola_model->hapusDataResep($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelola_data/resep');
    }

    public function ubah_resep($id)
    {
        $data['title'] = 'Edit Data Resep';
        $data['resep'] = $this->Kelola_model->getResepById($id);


        $this->form_validation->set_rules('id_resep', 'Id Resep', 'required');
        $this->form_validation->set_rules('id_rekamedis', 'Id Rekam Medis', 'required');
        $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required');
        $this->form_validation->set_rules('obat', 'Obat', 'required');
        $this->form_validation->set_rules('dosis', 'Dosis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kelola_data/ubah_resep', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelola_model->ubahDataResep();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelola_data/resep');
        }
    }
}
