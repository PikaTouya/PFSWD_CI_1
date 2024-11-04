<?php 

class Kategori extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("mKategori"); //panggil mKategori yang ada di folder Models
    }

    function index() {
        $data["data"] = $this->mKategori->getData(); // panggil function getData
        $this->load->view("view_kategori",$data); // tampilkan hasil pada view
    }
}


?>