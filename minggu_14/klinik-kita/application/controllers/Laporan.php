<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelola_model');
        $this->load->library('form_validation');
    }

    public function lap_rekamedis()
    {
        $data['title'] = 'Laporan Rekam Medis';
        $data['rekamedis'] = $this->Kelola_model->getAllRekamedis();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/lap_rekamedis', $data);
        $this->load->view('templates/footer');
    }

    public function lap_resep()
    {
        $data['title'] = 'Laporan Resep';
        $data['resep'] = $this->Kelola_model->getAllResep();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/lap_resep', $data);
        $this->load->view('templates/footer');
    }
}
