<?php

class About extends CI_Controller{

    public function index()
    {
        $data['judul'] = "My Profile";
        $data['nama']  = "Putut Priambodo";
        $data['email']  = "priambodoputut557@gmail.com";
        $data['git']  = "https://github.com/PututDev";
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}


?>