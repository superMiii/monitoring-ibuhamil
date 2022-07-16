<?php

class M_role extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_role')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('tb_role', ['id' => $id])->row_array();
    }
    public function countAll()
    {
        return $this->db->query('SELECT * FROM tb_role')->num_rows();
    }
    public function add()
    {
        $data = [
            'role' => $this->input->post('role', true),
        ];

        $this->db->insert('tb_role', $data);
    }
    public function edit($id)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('tb_role', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_role');
    }
}
