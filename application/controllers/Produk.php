<?php 

class Produk extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("mProduk"); //panggil mProduk yang ada di folder Models
    }

    function index() {
        $data["data"] = $this->mProduk->getData(); // panggil function getData
        $this->load->view("view_produk",$data); // tampilkan hasil pada view
    }
}


?>