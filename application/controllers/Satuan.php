<?php 

class Satuan extends CI_Controller {
    // protected $mSatuan;

    function __construct() {
        parent::__construct();
        $this->load->model("mSatuan"); //panggil msatuan yang ada di folder Models
    }

    function index() {
        $data["data"] = $this->mSatuan->getData(); // panggil function getData
        $this->load->view("view_satuan",$data); // tampilkan hasil pada view
    }
}


?>