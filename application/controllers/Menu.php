<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->helper('text');
		$this->load->helper('url_helper');
	}
	public function index(){
		$apa['judul'] ='Menu';
		$this->load->view('admin/head_view',$apa);
		$data['menu'] = $this->menu_model->getAll();
		$this->load->view('admin/menu_view',$data);
	}
	
	public function add(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('paket', 'Paket', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan');
		$this->form_validation->set_rules('foto', 'Foto');

		if ($this->form_validation->run() == FALSE){
			$apa['judul'] ='Menu';
			$this->load->view('admin/head_view',$apa);
			$data['err_message']="";
			$this->load->view('admin/menu_tambah_view',$data);
		}
		else {
			$target_dir = "img/menu/";
			$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["gambar"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["gambar"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			if($uploadOk== 1){
			$data = array(
				'paket'			=> set_value('paket'),
				'jenis'			=> set_value('jenis'),
				'isi'			=> set_value('isi'),
				'harga'			=> set_value('harga'),
				'keterangan'	=> set_value('keterangan'),
				'foto'			=> $target_file
			);
			$res=$this->menu_model->create($data);
			redirect('menu');
			}
		}
	}
	public function edit($id){
		$this->form_validation->set_rules('paket', 'Paket', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan');

		if ($this->form_validation->run() == FALSE){
			$apa['judul'] ='admin';
			$this->load->view('admin/head_view',$apa);
			$data['menu'] = $this->menu_model->findDetail($id);
			$this->load->view('admin/menu_edit_view',$data);
		}
		else {
			//$url = $this->do_upload();
			if($_FILES["gambar"]["error"] == 4){
					$data = array(
					'paket'			=> set_value('paket'),
					'jenis'			=> set_value('jenis'),
					'isi'			=> set_value('isi'),
					'harga'			=> set_value('harga'),
					'keterangan'	=> set_value('keterangan')
				);

			}else{
				$target_dir = "img/menu/";
				$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["gambar"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 0;
				}
				// Check file size
				if ($_FILES["gambar"]["size"] > 500000) {
					echo "Sorry, your file is too large.";
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
						unlink($this->input->post('data_foto'));
					} else {
						echo "Sorry, there was an error uploading your file.";
					}
				}
				$data = array(
					'paket'			=> set_value('paket'),
					'jenis'			=> set_value('jenis'),
					'isi'			=> set_value('isi'),
					'harga'			=> set_value('harga'),
					'keterangan'	=> set_value('keterangan'),
					'foto'			=> $target_file
				);
			}
			$this->menu_model->update($id,$data);
			redirect('menu');
		}
	}
	
	public function delete($id){
		$this->menu_model->delete($id);
		redirect('menu');
	}
}
?>
