<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != '') {
            redirect('login');
        }
    }

    function index()
    {
        $this->load->view('login');
    }

    function aksi_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->form_validation->set_message('required', 'Mohon maaf, {field} harus diisi');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['username' => $username])->row_array();
            if ($user != null) {
                if (md5($password) == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'id_user'  => $user['id_user'],
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

    function logout()
    {
        $this->session->sess_destroy(); //menghentikan semua sesion
        redirect(base_url('login')); // diarahkan ke form login
    }
}
