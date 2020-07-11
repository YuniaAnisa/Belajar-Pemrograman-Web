<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_model extends CI_Model
{
    public function getAllRekamedis()
    {
        return $this->db->get('rekamedis')->result_array();
    }


    /*public function getEditPasien($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
    }*/

    public function tambahDataRekamedis()
    {
        $data = [
            "id_rekamedis" => $this->input->post('id_rekamedis', true),
            "id_dokter" => $this->input->post('id_dokter', true),
            "id_pasien" => $this->input->post('id_pasien', true),
            "name" => $this->input->post('name', true),
            "gol_darah" => $this->input->post('gol_darah', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "obat" => $this->input->post('obat', true)
        ];

        $this->db->insert('rekamedis', $data);
    }

    public function hapusDataRekamedis($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rekamedis');
    }

    public function getRekamedisById($id)
    {
        return $this->db->get_where('rekamedis', ['id' => $id])->row_array();
    }

    public function ubahDataRekamedis()
    {
        $data = [
            "id_rekamedis" => $this->input->post('id_rekamedis', true),
            "id_dokter" => $this->input->post('id_dokter', true),
            "id_pasien" => $this->input->post('id_pasien', true),
            "name" => $this->input->post('name', true),
            "gol_darah" => $this->input->post('gol_darah', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "obat" => $this->input->post('obat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('rekamedis', $data);
    }

    public function getAllResep()
    {
        return $this->db->get('resep')->result_array();
    }


    /*public function getEditPasien($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
    }*/

    public function tambahDataResep()
    {
        $data = [
            "id_resep" => $this->input->post('id_resep', true),
            "id_rekamedis" => $this->input->post('id_rekamedis', true),
            "id_pasien" => $this->input->post('id_pasien', true),
            "name" => $this->input->post('name', true),
            "id_dokter" => $this->input->post('id_dokter', true),
            "obat" => $this->input->post('obat', true),
            "dosis" => $this->input->post('dosis', true)
        ];

        $this->db->insert('resep', $data);
    }

    public function hapusDataResep($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('resep');
    }

    public function getResepById($id)
    {
        return $this->db->get_where('resep', ['id' => $id])->row_array();
    }

    public function ubahDataResep()
    {
        $data = [
            "id_resep" => $this->input->post('id_resep', true),
            "id_rekamedis" => $this->input->post('id_rekamedis', true),
            "id_pasien" => $this->input->post('id_pasien', true),
            "name" => $this->input->post('name', true),
            "id_dokter" => $this->input->post('id_dokter', true),
            "obat" => $this->input->post('obat', true),
            "dosis" => $this->input->post('dosis', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('resep', $data);
    }
}
