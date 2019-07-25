<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('user_model');
		$this->load->helper('text');
    $this->load->helper('url_helper');
		if($this->session->has_userdata('username')){
			if ($_SESSION['status']=='admin') {
			}else if ($_SESSION['status']='user'){
				redirect('user');
			}else {
				echo "<script>alert('maaf status anda tidak jelas')</script>";
				redirect('login');
			}
		}else{
			redirect('login');
		}
  }
	public function index(){
		$apa['judul'] ='Welcome';
		$this->load->view('admin/head_view',$apa);
		$data['akun'] = $this->user_model->getAll();
		$this->load->view('admin/welcome_view',$data);
	}
	public function admin(){
		$apa['judul'] ='User';
		$this->load->view('admin/head_view',$apa);
		$data['akun'] = $this->user_model->getAll();
		$this->load->view('admin/admin_view',$data);
	}
	public function userAdd(){
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Ulangi Password', 'required');
		$this->form_validation->set_rules('notelp', 'No Telepon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat');

		if ($this->form_validation->run() == FALSE){
			$apa['judul'] ='User';
			$this->load->view('admin/head_view',$apa);
			$data['err_message']="";
			$this->load->view('admin/akun_tambah_view',$data);
		}
		else {
      if($this->input->post('pass')==$this->input->post('pass2')){
				$data = array(
					'nama'			=> set_value('nama'),
					'username'	=> set_value('username'),
					'password'	=> sha1(md5(sha1(set_value('pass')))),
					'email'		=> set_value('email'),
					'notelp'	=> set_value('notelp'),
					'alamat'	=> set_value('alamat'),
					'status'		=> 'admin',
					'authentication' => 0
				);
				$this->user_model->create($data);
				redirect('admin/admin');
      }else{
		$apa['judul'] ='User';
		$this->load->view('admin/head_view',$apa);
		$data['err_message']="Admin berhasil ditambahkan";
		echo"<script>alert('Admin berhasil ditambahkan')</script>";
		$this->load->view('admin/akun_tambah_view',$data);
      }
		}
	}
	public function userEdit($id){
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('notelp', 'No Telepon', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat');

		if ($this->form_validation->run() == FALSE){
			$apa['judul'] ='User';
			$this->load->view('admin/head_view',$apa);
			$data['akun'] = $this->user_model->findDetail($id);
			$this->load->view('admin/akun_edit_view',$data);
		}
		else {
			$data = array(
				'nama'			=> set_value('nama'),
				'username'	=> set_value('username'),
				'email'		=> set_value('email'),
				'notelp'	=> set_value('notelp'),
				'alamat'	=> set_value('alamat'),
				'authentication' => 0
			);
			$this->user_model->update($id,$data);
			echo"<script>alert('data berhasil di ubah')</script>";
			redirect('admin/admin');
		}
	}
	public function resetPass($id)
	{
		$data = array('password' => sha1(md5(sha1('123'))));
		$this->user_model->update($id,$data);
		echo"<script>alert('password milik telah direset')</script>";
		redirect('admin/admin');
	}
	public function userDelete($id){
		$this->user_model->delete($id);
		echo"<script>alert('user telah dihapus')</script>";
		redirect('admin/admin');
	}
}
?>
