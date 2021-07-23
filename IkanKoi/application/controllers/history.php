<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        if ($this->session->userdata('id_user') == '') {
            redirect('login');
        }
    }

    public function index()
    {
        $data['uji'] = $this->M_data->getAll('uji_coba')->result();
        $this->load->view('history', $data);
    }

    public function detail($detUji)
    {

        $data['uji'] = $this->M_data->getID($detUji);
        $data['suhu'] = $this->M_data->getID2($detUji);
        $data['tds'] = $this->M_data->getID3($detUji);
        $data['do'] = $this->M_data->getID4($detUji);
        $data['hasil'] = $this->M_data->getID5($detUji);
        $this->load->view('history_detail', $data);
    }
}
