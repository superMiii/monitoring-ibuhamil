<?php

class M_user extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_user')->result_array();
    }
    public function getByRole()
    {
        return $this->db->get_where('tb_user', ['role' => 2])->result_array();
    }
    public function countAll()
    {
        return $this->db->query('SELECT * FROM tb_user')->num_rows();
    }
    public function countNakes()
    {
        return $this->db->query('SELECT * FROM tb_user WHERE role = 2')->num_rows();
    }
    public function getNakes()
    {
        return $this->db->query('SELECT * FROM tb_user WHERE role = 2')->result_array();
    }
    public function add()
    {
        $data = [
            'username' => $this->input->post('username', true),
            'nama' => $this->input->post('nama', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role' => $this->input->post('role', true),
            'created_at' => date('Y-m-d h:i:s'),
        ];

        $this->db->insert('tb_user', $data);
    }
    public function edit($id)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role' => $this->input->post('role', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('tb_user', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_user');
    }
}
