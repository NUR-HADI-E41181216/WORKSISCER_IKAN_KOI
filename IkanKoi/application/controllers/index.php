<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == '') {
            redirect('login');
        }
    }
    public function index()
    {

        $this->load->view("index.php");
    }
    public function view1()
    {
        $this->load->view("view1.php");
    }
    public function view2()
    {
        $this->load->view("view2.php");
    }
    public function view3()
    {
        $this->load->view("view3.php");
    }
    public function view4()
    {
        $this->load->view("view4.php");
    }
    public function view5()
    {
        $this->load->view("view5.php");
    }
    public function view6()
    {
        $this->load->view("view6.php");
    }
}
