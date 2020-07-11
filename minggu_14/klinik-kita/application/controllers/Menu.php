<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer',);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }

    public function hapus_menu($id)
    {
        $this->load->model('Menu_model');
        $this->Menu_model->hapusMenu($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('menu');
    }

    public function ubah_menu($id)
    {
        $data['title'] = 'Edit Menu Management';
        $this->load->model('Menu_model');
        $data['menu'] = $this->Menu_model->getMenuById($id);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('id');
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/ubah_menu', $data);
        } else {
            $this->Menu_model->ubahDataMenu();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Pasien Berhasil Di Edit</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Menu_model');
        $this->Menu_model->hapusSubMenu($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('menu/submenu');
    }

    public function ubah_submenu($id)
    {
        $data['title'] = 'Edit Sub Menu';
        $this->load->model('Menu_model');
        $data['submenu'] = $this->Menu_model->getSubmenuById($id);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('id');
        $this->form_validation->set_rules('title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'required');
        $this->form_validation->set_rules('icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/ubah_submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->ubahDataSubmenu();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Pasien Berhasil Di Edit</div>');
            redirect('menu/submenu');
        }
    }
}
