<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('order_model');
		$this->load->model('bayar_model');
		$this->load->helper('text');
		$this->load->helper('url_helper');
	}
	public function index(){
		$apa['judul'] ='Payment';
		$this->load->view('admin/head_view',$apa);
		$data['bayar'] = $this->bayar_model->getAll();
		$this->load->view('admin/payment_view',$data);
	}

	public function edit($id){
		$apa['judul'] ='Payment';
		$this->load->view('admin/head_view',$apa);
		$data['order'] = $this->bayar_model->findDetail($id);
		$data['menu'] = $this->menu_model->getAll();
		$this->load->view('admin/bayar_edit_view',$data);
	}
}