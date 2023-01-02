<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ibuhamil');
        $this->load->model('M_monitoring');
        $this->load->model('M_user');
        $this->load->model('M_role');
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Untuk mengakses dashboard, anda perlu login.</div');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['count_all_monitoring'] = $this->M_monitoring->countAll();
        $data['count_all_ibuhamil'] = $this->M_ibuhamil->countAll();
        $data['count_all_user'] = $this->M_user->countAll();
        $data['count_all_role'] = $this->M_role->countAll();
        $data['count_all_nakes'] = $this->M_user->countNakes();

        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar', $data);
        $this->load->view('Pages/Admin/index', $data);
        $this->load->view('Layout/Admin/footer');
    }

    /*
        Data Ibu Hamil
    */
    public function data_ibuhamil()
    {
        $data['ibuhamil'] = $this->M_ibuhamil->getAll();
        $data['title'] = 'Data Ibu Hamil';
        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar');
        $this->load->view('Pages/Admin/data_ibuhamil', $data);
        $this->load->view('Layout/Admin/footer');
    }
    public function detail_ibuhamil($id)
    {
        $data['title'] = 'Tambah Data Ibu Hamil';
        $data['ibuhamil'] = $this->M_ibuhamil->getById($id);
        $data['monitoring_ibuhamil'] = $this->M_monitoring->getByIdIbuhamil($id);
        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar');
        $this->load->view('Pages/Admin/detail_ibuhamil', $data);
        $this->load->view('Layout/Admin/footer');
    }
    public function add_ibuhamil()
    {
        $this->form_validation->set_rules('no_kk', 'NO KK', 'required|numeric|is_unique[tb_ibuhamil.no_kk]|max_length[16]');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[tb_ibuhamil.nik]|max_length[16]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required|numeric|max_length[3]');
        $this->form_validation->set_rules('no_wa', 'No WA', 'required|numeric|max_length[14]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('gol_darah', 'Gol Darah', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required|numeric|max_length[4]');
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required|max_length[4]');
        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Tambah Data Ibu Hamil';
            $this->load->view('Layout/Admin/header', $data);
            $this->load->view('Layout/Admin/sidebar', $data);
            $this->load->view('Layout/Admin/topbar');
            $this->load->view('Pages/Admin/tambah_ibuhamil', $data);
            $this->load->view('Layout/Admin/footer');
        } else {
            $this->M_ibuhamil->add();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ibu hamil berhasil di tambah!</div>');
            redirect('administrator/data_ibuhamil');
        }
    }
    public function edit_ibuhamil($id)
    {
        $this->form_validation->set_rules('no_kk', 'NO KK', 'required|numeric|is_unique[tb_ibuhamil.no_kk]|max_length[16]');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[tb_ibuhamil.nik]|max_length[16]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required|numeric|max_length[3]');
        $this->form_validation->set_rules('no_wa', 'No WA', 'required|numeric|max_length[14]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('gol_darah', 'Gol Darah', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required|numeric|max_length[4]');
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required|max_length[4]');
        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Tambah Data Ibu Hamil';
            $data['ibuhamil'] = $this->M_ibuhamil->getById($id);
            $this->load->view('Layout/Admin/header', $data);
            $this->load->view('Layout/Admin/sidebar', $data);
            $this->load->view('Layout/Admin/topbar');
            $this->load->view('Pages/Admin/edit_ibuhamil', $data);
            $this->load->view('Layout/Admin/footer');
        } else {
            $this->M_ibuhamil->edit($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ibu hamil berhasil di ubah!</div>');
            redirect('administrator/data_ibuhamil');
        }
    }
    public function delete_ibuhamil($id)
    {
        $data = $this->M_ibuhamil->getById($id);
        if ($data) {
            $this->M_ibuhamil->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ibu hamil berhasil di hapus!</div>');
            redirect('administrator/data_ibuhamil');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Ibu hamil tidak ada!</div>');
            redirect('administrator/data_ibuhamil');
        }
    }
    /*
        End Of Data Ibu Hamil
    */


    /*
        Data Monitoring
    */
    public function data_monitoring()
    {
        $data['ibuhamil'] = $this->M_ibuhamil->getAll();
        $data['title'] = 'Data Monitoring Ibu Hamil';
        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar');
        $this->load->view('Pages/Admin/data_monitoring', $data);
        $this->load->view('Layout/Admin/footer');
    }
    public function detail_monitoring($id)
    {
        $data['monitoring_ibuhamil'] = $this->M_monitoring->getByIdIbuhamil($id);
        $data['title'] = 'Data Monitoring Ibu ' . $data['monitoring_ibuhamil'][0]['nama_lengkap'];
        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar');
        $this->load->view('Pages/Admin/detail_monitoring', $data);
        $this->load->view('Layout/Admin/footer');
    }
    public function tambah_data_monitoring($id_ibuhamil)
    {
        $this->form_validation->set_rules('tanggal_monitoring', 'Tanggal Monitoring', 'required');
        $this->form_validation->set_rules('tekanan_darah', 'Tekanan Darah', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required|numeric|max_length[4]');
        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required|numeric|max_length[4]');
        $this->form_validation->set_rules('lingkar_lengan_atas', 'Lingkar Lengan Atas', 'required');
        $this->form_validation->set_rules('leopold', 'Leopold', 'required');
        $this->form_validation->set_rules('tinggi_fundus_uteri', 'Tinggi Fundus Uteri', 'required');
        $this->form_validation->set_rules('denyut_jantung_janin', 'Denyut Jantung Janin', 'required');
        if ($this->form_validation->run() === false) {
            $data['ibuhamil'] = $this->M_ibuhamil->getById($id_ibuhamil);
            $data['title'] = 'Tambah Data Monitoring Ibu ' . $data['ibuhamil']['nama_lengkap'];
            $this->load->view('Layout/Admin/header', $data);
            $this->load->view('Layout/Admin/sidebar', $data);
            $this->load->view('Layout/Admin/topbar');
            $this->load->view('Pages/Admin/tambah_monitoring_ibuhamil', $data);
            $this->load->view('Layout/Admin/footer');
        } else {
            $this->M_monitoring->add($id_ibuhamil);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Monitoring Ibu hamil berhasil ditambahkan</div>');
            redirect('administrator/detail_monitoring/' . $id_ibuhamil);
        }
    }
    public function detail_monitoring_ibuhamil($id_ibuhamil, $id)
    {
        $data['monitoring_ibuhamil'] = $this->M_monitoring->getById($id_ibuhamil, $id);
        $data['title'] = 'Data Monitoring Ibu ' . $data['monitoring_ibuhamil']['nama_lengkap'];
        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar');
        $this->load->view('Pages/Admin/detail_monitoring_ibuhamil', $data);
        $this->load->view('Layout/Admin/footer');
    }
    public function hapus_monitoring_ibuhamil($id_ibuhamil, $id)
    {
        $data = $this->M_monitoring->getById($id_ibuhamil, $id);
        if ($data) {
            $this->M_monitoring->delete($id_ibuhamil, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data monitoring berhasil di hapus!</div>');
            redirect('administrator/detail_monitoring/' . $id_ibuhamil);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data monitoring tidak ada!</div>');
            redirect('administrator/detail_monitoring/' . $id_ibuhamil);
        }
    }
    /*
        End Of Data Monitoring
    */

    /*
        Data Nakes
    */
    public function nakes()
    {
        $data['nakes'] = $this->M_user->getNakes();
        $data['title'] = 'Data Nakes';
        $this->load->view('Layout/Admin/header', $data);
        $this->load->view('Layout/Admin/sidebar', $data);
        $this->load->view('Layout/Admin/topbar');
        $this->load->view('Pages/Admin/data_nakes', $data);
        $this->load->view('Layout/Admin/footer');
    }
}
