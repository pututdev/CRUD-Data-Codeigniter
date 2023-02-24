<?php

class Peoples extends CI_Controller{

    public function index(){
        $data['judul'] = "Daftar Makhluk Bumi";
        $this->load->model('Peoples_model', 'peoples');

        // Pagenation
        $this->load->library('pagination');

        // Config
        $config ['base_url'] = 'http://localhost/pututdev_2/peoples/index';
        $config ['total_rows'] = $this->peoples->ambilJumlahData();
        $config ['per_page'] = 12;
        $config['num_links']  = 5;

        // Styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        
        $config ['first_link'] = 'Awal';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config ['last_link'] = 'Akhir';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config ['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config ['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // Inisialisasi
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeople($config['per_page'], $data['start']);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $this->load->model('Peoples_model');
        $data['judul'] = "Detail Data";
        $data['peoples'] = $this->Peoples_model->ambilDataById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->load->model('Peoples_model');
        $data['peoples'] = $this->Peoples_model->hapusData($id);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/detail', $data);
        $this->load->view('templates/footer');
    }
    
}