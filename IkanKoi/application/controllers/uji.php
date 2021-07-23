<?php
defined('BASEPATH') or exit('No direct script access allowed');

class uji extends CI_Controller
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
        $this->load->view("UjiKualitasAir.php");
    }

    public function insert()
    {
        // autonumber
        $this->db->select('RIGHT(uji_coba.id_uji_coba,6) as id_uji_coba', FALSE);
        $this->db->order_by('id_uji_coba', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('uji_coba');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->id_uji_coba) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $batas = str_pad($kode, 6, "0", STR_PAD_LEFT);
        $kodetampil = "UJC" . $batas;  //format kode

        $data = array(
            'id_uji_coba' => $kodetampil,
            'tanggal'     => $this->input->post('tanggal'),
            'suhu'        => $this->input->post('suhuin'),
            'tds'         => $this->input->post('tdsin'),
            'do'          => $this->input->post('dosin'),
            'score'       => $this->input->post('score'),
            'hasil'       => $this->input->post('hasil'),
            'id_user'     => $this->input->post('id_user')
        );

        $data_suhu = array(
            'id_uji_coba'   => $kodetampil,
            'baik'          => $this->input->post('suhubaik'),
            'sedang'        => $this->input->post('suhusedang'),
            'buruk'         => $this->input->post('suhuburuk'),
            'sangat_buruk'  => $this->input->post('suhusangatburuk'),
            'id_user'     => $this->input->post('id_user')
        );

        $data_tds = array(
            'id_uji_coba'   => $kodetampil,
            'baik'          => $this->input->post('tdsbaik'),
            'sedang'        => $this->input->post('tdssedang'),
            'buruk'         => $this->input->post('tdsburuk'),
            'sangat_buruk'  => $this->input->post('tdssangatburuk'),
            'id_user'     => $this->input->post('id_user')
        );

        $data_dos = array(
            'id_uji_coba'   => $kodetampil,
            'baik'          => $this->input->post('dosbaik'),
            'sedang'        => $this->input->post('dossedang'),
            'buruk'         => $this->input->post('dosburuk'),
            'sangat_buruk'  => $this->input->post('dossangatburuk'),
            'id_user'     => $this->input->post('id_user')
        );

        $data_hasil = array(
            'id_uji_coba'   => $kodetampil,
            'kohaku'        => $this->input->post('koh'),
            'sanke'         => $this->input->post('san'),
            'sowa'          => $this->input->post('sow'),
            'shiro'         => $this->input->post('shi'),
            'ogan'          => $this->input->post('oga'),
            'yamabuki'      => $this->input->post('yam'),
            'id_user'     => $this->input->post('id_user')
        );

        $this->M_data->insert($data, 'uji_coba');
        $this->M_data->insert($data_suhu, 'suhu');
        $this->M_data->insert($data_tds, 'tds');
        $this->M_data->insert($data_dos, 'do');
        $this->M_data->insert($data_hasil, 'hasil');
        redirect('history');
    }
}
