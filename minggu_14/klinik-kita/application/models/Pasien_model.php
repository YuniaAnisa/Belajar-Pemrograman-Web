<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function tambahDataPasien()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien', true),
            "name" => $this->input->post('name', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "nohp" => $this->input->post('nohp', true)
        ];

        $this->db->insert('pasien', $data);
    }

    public function hapusDataPasien($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pasien');
    }

    public function getPasienById($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
    }

    public function ubahDataPasien()
    {
        $data = [
            "id_pasien" => $this->input->post('id_pasien', true),
            "name" => $this->input->post('name', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "nohp" => $this->input->post('nohp', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pasien', $data);
    }

    public function getAllDokter()
    {
        return $this->db->get('dokter')->result_array();
    }

    public function hapusDataDokter($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('Dokter');
    }

    public function tambahDataDokter()
    {
        $data = [
            "id_dokter" => $this->input->post('id_dokter', true),
            "name" => $this->input->post('name', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "spesialis" => $this->input->post('spesialis', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
            "jadwal" => $this->input->post('jadwal', true)
        ];

        $this->db->insert('dokter', $data);
    }

    public function getDokterById($id)
    {
        return $this->db->get_where('dokter', ['id' => $id])->row_array();
    }

    public function ubahDataDokter()
    {
        $data = [
            "id_dokter" => $this->input->post('id_dokter', true),
            "name" => $this->input->post('name', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "spesialis" => $this->input->post('spesialis', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
            "jadwal" => $this->input->post('jadwal', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('dokter', $data);
    }
}
