<?php
  class bayar_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }
    public function getAll(){
      $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and pesanan.id_order=pembayaran.id_order')->order_by("tgl_pesan,tgl_bayar")->get('pesanan,menu_makanan,akun,pembayaran');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }
      else {
        return array();
      }
    }

    public function create($data){
      $this->db->insert('pembayaran', $data);
    }
    public function update($id, $data){
      $this->db->where('id_order',$id)->update('pembayaran',$data);
    }
    public function delete($id){
      $this->db->where('id_order',$id)->delete('pembayaran');
    }
    public function findDetail($id){
     $hasil = $this->db->where('menu_makanan.id=pesanan.id and akun.username=pesanan.username and pembayaran.id_order=pesanan.id_order and pembayaran.id_order="'.$id.'"')->order_by("tgl_pesan")->get('pesanan,menu_makanan,akun,pembayaran');
      if($hasil->num_rows() > 0){
        return $hasil->row();
      }
      else {
        return array();
      }
    }
  }
?>