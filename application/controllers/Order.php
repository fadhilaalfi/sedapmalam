<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('order_model');
		$this->load->helper('text');
		$this->load->helper('url_helper');
	}
	public function index(){
		$apa['judul'] ='Order';
		$this->load->view('admin/head_view',$apa);
		$data['order'] = $this->order_model->getAllBayar();
		$data['ket']='List Orderan';
		$this->load->view('admin/order_view',$data);	
	}
	public function booking(){
		$apa['judul'] ='Order';
		$this->load->view('admin/head_view',$apa);
		$data['order'] = $this->order_model->getAllBlmbayar();
		$data['ket']='List Bookingan';
		$this->load->view('admin/order_view',$data);	
	}
	
	public function add(){
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Ulangi Password', 'required');
		$this->form_validation->set_rules('notelp', 'No Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat');

		if ($this->form_validation->run() == FALSE){
			$apa['judul'] ='Order';
			$this->load->view('admin/head_view',$apa);
			$data['err_message']="";
			$data['menu'] = $this->menu_model->getAll();
			$this->load->view('admin/order_tambah_view',$data);
		}
		else {
			$data = array(
				'id'			=> set_value('id'),
				'username'		=> set_value('username'),
				'jumlah'		=> set_value('jumlah'),
				'total_bayar'	=> set_value('harga_tot'),
				'tgl_pesan'		=> date('Y/m/d'),
				'tgl_kirim'		=> set_value('tgl_kirim'),
				'alamat_kirim'	=> set_value('alamat'),
				'keterangan_order'	=> set_value('keterangan')
			);
			$this->order_model->create($data);
			redirect('admin');
		}
	}
	public function edit($id){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('id', 'Menu', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah Pesananan', 'required');
		$this->form_validation->set_rules('harga_tot', 'Harga Total', 'required');
		$this->form_validation->set_rules('tgl_kirim', 'Tanggal Kirim', 'required');
		$this->form_validation->set_rules('status_order', 'Status Order', 'required');

		if ($this->form_validation->run() == FALSE){
			$apa['judul'] ='Order';
			$this->load->view('admin/head_view',$apa);
			$data['order'] = $this->order_model->findDetail($id);
			$data['menu'] = $this->menu_model->getAll();
			$this->load->view('admin/order_edit_view',$data);
		}
		else {
			$data = array(
				'id'			=> set_value('id'),
				'username'		=> set_value('username'),
				'jumlah'		=> set_value('jumlah'),
				'total_bayar'	=> set_value('harga_tot'),
				'tgl_pesan'		=> date('Y/m/d'),
				'tgl_kirim'		=> set_value('tgl_kirim'),
				'status_order'	=> set_value('status_order')
			);
			$this->order_model->update($id,$data);
			redirect('order');
		}
	}
	public function delete($id){
		$this->order_model->delete($id);
		redirect('order');
	}
}
?>