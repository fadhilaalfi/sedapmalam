<?php
  class order_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function getAll(){
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun'); 
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }
      else {
        return array();
      }
    }
  public function getAllBlmbayar(){
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and status_bayar=0 and status_order=0')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      } //cara nulis where yang bener biye sih
      else {
        return array();
      }
    }
  public function getAllBayar(){
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and status_bayar=1 and status_order=0')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun');
      if($hasil->num_rows() > 0){
        return $hasil->result();  //result() sama num_rows() sama array() bedanya gmn
      }
      else {
        return array();
      }
    }
  public function getUser($id){ //id dsini maksudnya id apa ya?
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and pesanan.username="'.$id.'"')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun'); //ini bacanya gmn mba?
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }
      else {
        return array();
      }
    }
  public function getBayar($id, $id_order){
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and pesanan.username="'.$id.'" and id_order="'.$id_order.'"')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun');
      if($hasil->num_rows() > 0){
        return $hasil->row();
      }
      else {
        return array();
      }
    }
    public function create($data){
      $this->db->insert('pesanan', $data);
    }
    public function update($id, $data){
      $this->db->where('id_order',$id)->update('pesanan',$data);
    }
    public function delete($id){
      $this->db->where('id_order',$id)->delete('pesanan');
    }
    public function findDetail($id){ //findetail ini buat apa?
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and id_order="'.$id.'"')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun');
      if($hasil->num_rows() > 0){
        return $hasil->row();
      }
      else {
        return array();
      }
    }
  }
?>