<?php

class login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index()
    {
        $this->load->view('login');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($user != null) {
            if (md5($password) == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'id'       => $user['id_user'],
                    'status'   => $user['status']
                ];
                $this->session->set_userdata($data);
                redirect('index');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Tidak Terdaftar</div>');
            redirect('login');
        }
    }
}
