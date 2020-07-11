<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendataan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('Pasien_model');
        $data['title'] = 'Data Pasien';
        $data['pasien'] = $this->Pasien_model->getAllPasien();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendataan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Pasien';

        $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendataan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->tambahDataPasien();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pendataan');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Pasien_model');
        $this->Pasien_model->hapusDataPasien($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pendataan');
    }

    public function ubah($id)
    {
        $data['title'] = 'Edit Data Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);


        $this->form_validation->set_rules('id_pasien', 'Id Pasien', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pendataan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->ubahDataPasien();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pendataan');
        }
    }

    public function dokter()
    {
        $this->load->model('Pasien_model');
        $data['title'] = 'Data Dokter';
        $data['dokter'] = $this->Pasien_model->getAllDokter();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendataan/dokter', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_dokter()
    {
        $data['title'] = 'Form Tambah Data Dokter';

        $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendataan/tambah_dokter');
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_model->tambahDataDokter();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pendataan/dokter');
        }
    }

    public function hapus_dokter($id)
    {
        $this->load->model('Pasien_model');
        $this->Pasien_model->hapusDataDokter($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pendataan/dokter');
    }

    public function ubah_dokter($id)
    {
        $data['title'] = 'Edit Data Dokter';
        $data['dokter'] = $this->Pasien_model->getDokterById($id);


        $this->form_validation->set_rules('id_dokter', 'Id Dokter', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pendataan/ubah_dokter', $data);
        } else {
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('dokter', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Pasien Berhasil Di Edit</div>');
            redirect('pendataan/dokter');
        }
    }
}
