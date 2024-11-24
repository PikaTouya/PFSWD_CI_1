<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model("mProduk"); //panggil mProduk yang ada di folder Models
    }
    function index(){
        $data['page'] = "Produk"; 
        $data['judul'] = "Data Produk"; 
        $data['deskripsi'] = "Manage Data Produk";
        $data['data'] = $this->mProduk->getData(); // panggil function getData
        $this->template->views("view_produk",$data); // tampilkan hasil pada view
    }
}