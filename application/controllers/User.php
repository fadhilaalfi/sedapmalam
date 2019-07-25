<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){ // __construct ini buat apa?
		parent::__construct(); // parent ini buat apa?
		$this->load->model('menu_model');
		$this->load->model('user_model');
		$this->load->model('order_model');
		$this->load->model('bayar_model');
		$this->load->helper('text'); // ini buat apa?
    $this->load->helper('url_helper'); // meload helper gunanya untuk apa?
		if($this->session->has_userdata('username')){ //has_userdata ini apa? buat sendiri kah?
			if ($_SESSION['status']=='user') { // session itu untuk menampung sementara ketita dia login/yg memerlukan username
			}else if ($_SESSION['status']='admin'){
				redirect('admin'); // 'admin' apa namanya? kapan dibuatnya?
			}else {
				echo "<script>alert('maaf status anda tidak jelas')</script>";
				redirect('login'); //'login' juga kapan dibuat kok tiba2 uda di direct aja?
			}
		}else{
			redirect('login');
		}
  }
	public function index(){
		$apa['judul'] ='Welcome'; // judul ini apasi sebenernya?
		$this->load->view('user/head_user_view',$apa);
		$data['akun'] = $this->user_model->getAll();
		$this->load->view('user/user_view',$data);
	}
	public function menu(){
		$apa['judul'] ='Menu';
		$this->load->view('user/head_user_view',$apa);
		$data['menu'] = $this->menu_model->getAll();
		$this->load->view('user/menu_user_view',$data);
	
	}
	public function order(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('id', 'Menu', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah Pesananan', 'required');
		$this->form_validation->set_rules('harga_tot', 'Harga Total', 'required');
		$this->form_validation->set_rules('tgl_kirim', 'Tanggal Kirim', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('ket', 'Keterangan');

		if ($this->form_validation->run() == FALSE){
		$apa['judul'] ='Order';
		$this->load->view('user/head_user_view',$apa);
		$data['menu'] = $this->menu_model->getAll();
		$data['order'] = $this->order_model->getAll();
		$this->load->view('user/order_user_view',$data);
			
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
			redirect('user/payment');
		}
	}
	public function payment(){
		$apa['judul'] ='Payment';
		$this->load->view('user/head_user_view',$apa);
		$data['order'] = $this->order_model->getUser($_SESSION['username']);
		$this->load->view('user/payment_user_view',$data);
	}
	
	public function bayar($id){
		$this->form_validation->set_rules('id_order', 'id_order', 'required');
		$this->form_validation->set_rules('pembayaran', 'Jenis Pembayaran', 'required');
		$this->form_validation->set_rules('bayar', 'Harga Bayar', 'required');
		$this->form_validation->set_rules('transaksi', 'Transaksi', 'required');

		if ($this->form_validation->run() == FALSE){
		$apa['judul'] ='Payment';
		$this->load->view('user/head_user_view',$apa);
		$data['order'] = $this->order_model->getBayar($_SESSION['username'],$id);
		$data['bayar'] = $this->bayar_model->getAll();
		$this->load->view('user/bayar_user_view',$data);
	
		}
		else {
			$data = array(
				'id_order'		=> set_value('id_order'),
				'tgl_bayar'		=> date('Y/m/d'),
				'total_bayar'	=> set_value('bayar'),
				'jenis_bayar'	=> set_value('pembayaran'),
				'id_transaksi'	=> set_value('transaksi')
			);
			$this->bayar_model->create($data);
			if($this->input->post('pembayaran')=='DP'){
				$data2 = array('status_bayar'=> 1);
			}else{
				$data2 = array('status_bayar'=> 1, 'lunas'=>1);
			}
			$this->order_model->update(set_value('id_order'),$data2);
			redirect('user/payment');
		}
	}
}
?>
