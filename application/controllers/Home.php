<?php
class Home extends CI_Controller{

    public function __construct(){
        parent:: __construct();
    }
    public function index(){
        $this->load->view('home');
    }
    public function dashboard(){
        $this->load->view('dashboard');
    }
    public function book_stock_manage(){
        $this->load->view('book_stock_manage');
    }
}
?>