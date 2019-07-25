<?php
  class menu_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function getAll(){
      $hasil = $this->db->order_by("jenis,paket")->get('menu_makanan');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }
      else {
        return array();
      }
    }

    public function create($data){
      $this->db->insert('menu_makanan', $data);
    }
    public function update($id, $data){
      $this->db->where('id',$id)->update('menu_makanan',$data);
    }
    public function delete($id){
      $this->db->where('id',$id)->delete('menu_makanan');
    }
    public function findDetail($id){
      $hasil = $this->db->where('id',$id)->limit(1)->get('menu_makanan');
      if($hasil->num_rows() > 0){ // kyk gmn ini?
        return $hasil->row();
      }
      else {
        return array();
      }
    }
  }
?>
