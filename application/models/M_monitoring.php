<?php

class M_monitoring extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_monitoring')->result_array();
    }
    public function getByIdIbuhamil($id)
    {
        $this->db->select('tb_monitoring.*, tb_ibuhamil.nama_lengkap, tb_ibuhamil.umur, tb_ibuhamil.tempat_lahir, tb_ibuhamil.no_wa, tb_ibuhamil.tanggal_lahir, tb_ibuhamil.alamat');
        $this->db->from('tb_monitoring');
        $this->db->join('tb_ibuhamil', 'tb_ibuhamil.id_ibuhamil = tb_monitoring.id_ibuhamil');
        $this->db->where('tb_monitoring.id_ibuhamil', $id);
        return $this->db->get()->result_array();
    }
    public function getById($id_ibuhamil, $id)
    {
        $this->db->select('tb_monitoring.*, tb_ibuhamil.nama_lengkap, tb_ibuhamil.umur, tb_ibuhamil.tempat_lahir, tb_ibuhamil.no_wa, tb_ibuhamil.tanggal_lahir, tb_ibuhamil.alamat');
        $this->db->from('tb_monitoring');
        $this->db->join('tb_ibuhamil', 'tb_ibuhamil.id_ibuhamil = tb_monitoring.id_ibuhamil');
        $this->db->where('tb_monitoring.id_ibuhamil', $id_ibuhamil);
        $this->db->where('tb_monitoring.id', $id);
        return $this->db->get()->row_array();
    }
    public function countAll()
    {
        return $this->db->query('SELECT * FROM tb_monitoring')->num_rows();
    }
    public function add($id_ibuhamil)
    {
        $data = [
            'id_ibuhamil' => $id_ibuhamil,
            'tanggal_monitoring' => $this->input->post('tanggal_monitoring', true),
            'tekanan_darah' => $this->input->post('tekanan_darah', true),
            'tinggi_badan' => $this->input->post('tinggi_badan', true),
            'berat_badan' => $this->input->post('berat_badan', true),
            'lingkar_lengan_atas' => $this->input->post('lingkar_lengan_atas', true),
            'leopold' => $this->input->post('leopold', true),
            'tinggi_fundus_uteri' => $this->input->post('tinggi_fundus_uteri', true),
            'denyut_jantung_janin' => $this->input->post('denyut_jantung_janin', true),
        ];

        $this->db->insert('tb_monitoring', $data);
    }
    public function delete($id_ibuhamil, $id)
    {
        $this->db->where('id_ibuhamil', $id_ibuhamil);
        $this->db->where('id', $id);
        $this->db->delete('tb_monitoring');
    }
}
