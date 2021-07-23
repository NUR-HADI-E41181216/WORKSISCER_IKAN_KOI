<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_reg');
        if ($this->session->userdata('id_user') == '') {
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->view('view_register');
    }
    public function proses_register()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[20]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha_numeric_spaces|min_length[2]|max_length[20]');

        $this->form_validation->set_message('alpha_numeric_spaces', 'Mohon maaf, {field} harus diisi menggunakan huruf dan angka');
        $this->form_validation->set_message('required', 'Mohon maaf, {field} harus diisi');
        $this->form_validation->set_message('min_length', 'Mohon maaf, {field} harus diisi minimum {param} karakter');
        $this->form_validation->set_message('matches', 'Mohon maaf, Password yang anda masukkan tidak cocok');

        $this->db->select('RIGHT(user.id_user,6) as id_user', FALSE);
        $this->db->order_by('id_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('user');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->id_user) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $batas = str_pad($kode, 6, "0", STR_PAD_LEFT);
        $kodetampil = "USR" . $batas;  //format kode

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->Model_reg->getAll('user')->result();
            $this->load->view('view_register');
        } else {
            $data = array(
                'id_user'  => $kodetampil,
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama'     => $this->input->post('nama')
            );
            $this->Model_reg->insert($data, 'user');
            if ($this->db->affected_rows() == true) {
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Akun Anda Berhasil Dibuat.
                <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                ');
                redirect('login');
            } else {
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Akun Anda Gagal Dibuat.
                <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                ');
                redirect('register');
            }
        }
    }
}
