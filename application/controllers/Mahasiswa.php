<?php

class Mahasiswa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = "Daftar Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->ambilData();
        
        if($this->input->post('keyword')){
            $data['mahasiswa'] = $this->Mahasiswa_model->cariData();
        }
        

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function tambah(){
        $data['judul'] = "Form Data Mahasiswa";

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
     
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        }
        else{
            $this->Mahasiswa_model->tambahData();
            $this->session->set_flashdata('pesan', 'Ditambahkan');
            redirect('mahasiswa');
        }

    }

    public function hapus($id){

        $this->Mahasiswa_model->hapusData($id);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('mahasiswa');

    }

    public function detail($id){

        $data['judul'] = "Detail Data Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->ambilDataById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail');
        $this->load->view('templates/footer');


    }

    public function ubah($id){
        $data['judul'] = "Form Edit Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->ambilDataById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Mesin', 'Mechanical Enginering'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|trim|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
     
        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->Mahasiswa_model->ubahData();
            $this->session->set_flashdata('pesan', 'Diubah');
            redirect('mahasiswa');
        }

    }

}







?>