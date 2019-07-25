<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Awal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('menu_model');
		$this->load->helper('text');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['menu'] = $this->menu_model->getAll();
		$this->load->view('home_view',$data);	
	}
	public function lupa_pass()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('pass','Password','required');
		$this->form_validation->set_rules('pass2','Ulangi Password','required');
		if($this->form_validation->run()==FALSE){
			$data['err_message']="";
			$this->load->view('lupa_view',$data);
		}else{
			if($this->input->post('pass')==$this->input->post('pass2')){
				$user = set_value('username');
				$data =array('password'=>sha1(md5(sha1(set_value('pass')))));
				$this->user_model->update($user,$data);
				redirect('login');
			}else{
				$data['err_message']=="password tidak sama";
				$this->load->view('lupa_view',$data);
			}
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['err_message']="";
			$this->load->view('login_view',$data);
		}
		else {
			$username = $this->input->post('username');
			$password = sha1(md5(sha1($this->input->post('pass'))));
			$isLogin = $this->user_model->login_authen($username, $password);

			$i = $this->user_model->authen_user($username);

			if ($isLogin == true && $i[0]['authentication'] < 3) {
				$newdata = array(
				'username'=> $i[0]['username'],
				'nama'		=> $i[0]['nama'],
				'status'	=> $i[0]['status']
				);
				$this->session->set_userdata($newdata);
				$this->user_model->wrong_password($username, 0);
				if($i[0]['status']=='admin'){
					echo "<script>alert('login admin berhasil')</script>";
					redirect('admin');
				}else{
					echo "<script>alert('login user berhasil')</script>";
					redirect('user');
				}
			}
else if($isLogin==false){
$data['err_message'] = "Username atau password salah";
$this->load->view('login_view', $data);
}
			else{
				if ($i[0]['authentication'] < 3) {
					$update = $this->user_model->wrong_password($username, $i[0]['authentication']+1);
					$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
					$this->load->view('login_view', $data);
				}
				else{
					$data['err_message'] = "AKUN ANDA TERBLOCK";
					$this->load->view('login_view', $data);
				}
			}
		}
	}
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Ulangi Password', 'required');
		$this->form_validation->set_rules('notelp', 'No Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat');

		if ($this->form_validation->run() == FALSE){
			$data['err_message']="";
			$this->load->view('login_view',$data);
		}
		else {
      if($this->input->post('pass')==$this->input->post('pass2')){
				$data = array(
					'nama'		=> set_value('nama'),
					'username'	=> set_value('username'),
					'password'	=> sha1(md5(sha1(set_value('pass')))),
					'notelp'	=> set_value('notelp'),
					'alamat'	=> set_value('alamat'),
					'email'		=> set_value('email'),
					'status'	=> 'user',
					'authentication' => 0
				);
				$this->user_model->create($data);
				redirect('login');
      }else{
				$data['err_message']="password tidak cocok";
				$this->load->view('register_view',$data);
      }
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}