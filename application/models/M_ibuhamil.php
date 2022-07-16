<?php

class M_ibuhamil extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_ibuhamil')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('tb_ibuhamil', ['id_ibuhamil' => $id])->row_array();
    }
    public function countAll()
    {
        return $this->db->query('SELECT * FROM tb_ibuhamil')->num_rows();
    }
    public function add()
    {
        $data = [
            'no_kk' => $this->input->post('no_kk', true),
            'nik' => $this->input->post('nik', true),
            'nama_lengkap' => $this->input->post('nama_lengkap', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'umur' => $this->input->post('umur', true),
            'no_wa' => $this->input->post('no_wa', true),
            'alamat' => $this->input->post('alamat', true),
            'pendidikan' => $this->input->post('pendidikan', true),
            'gol_darah' => $this->input->post('gol_darah', true),
            'agama' => $this->input->post('agama', true),
            'berat_badan' => $this->input->post('berat_badan', true),
            'tinggi_badan' => $this->input->post('tinggi_badan', true),
        ];

        $this->db->insert('tb_ibuhamil', $data);
    }
    public function edit($id)
    {
        $data = [
            'no_kk' => $this->input->post('no_kk', true),
            'nik' => $this->input->post('nik', true),
            'nama_lengkap' => $this->input->post('nama_lengkap', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'umur' => $this->input->post('umur', true),
            'no_wa' => $this->input->post('no_wa', true),
            'alamat' => $this->input->post('alamat', true),
            'pendidikan' => $this->input->post('pendidikan', true),
            'gol_darah' => $this->input->post('gol_darah', true),
            'agama' => $this->input->post('agama', true),
            'berat_badan' => $this->input->post('berat_badan', true),
            'tinggi_badan' => $this->input->post('tinggi_badan', true),
        ];
        $this->db->where('id_ibuhamil', $id);
        $this->db->update('tb_ibuhamil', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_ibuhamil', $id);
        $this->db->delete('tb_ibuhamil');
    }
}
