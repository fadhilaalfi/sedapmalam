<?php
  class user_model extends CI_Model{
    public function __construct(){ //untuk menjalankan secara otomatis 
      $this->load->database();
    }

    public function login_authen($username,$password)
    {
      $this->db->select('*');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $this->db->from('akun');
      $query = $this->db->get();
      if ($query->num_rows() == 1) { // numrows tau jumlah barisnya
      return true;
      }
      else{
      return false;
      }
    }
    public function authen_user($username)
    {
      $this->db->select('*');
      $this->db->where('username', $username);
      $this->db->from('akun');
      $query = $this->db->get();
      return $query->result_array(); // untuk mengetahui isinya
    }
    public function wrong_password($username, $value){
      $this->db->set('authentication', $value);
      $this->db->where("username", $username);
      $this->db->update('akun');
    }
    public function getAll(){
      $hasil = $this->db->order_by("status")->get('akun');
      if($hasil->num_rows() > 0){
        return $hasil->result();
      }
      else {
        return array();
      }
    }
    public function create($data){
      $this->db->insert('akun', $data); //$data : apakah dia yg menampung keseluruhan tabel akun?
    }
    public function update($id, $data){ //$id ini buat apa? apakah beda dgn id yg ada di tabel menu_makanan
      $this->db->where('username',$id)->update('akun',$data);
    }
    public function delete($id){
      $this->db->where('username',$id)->delete('akun'); //kenapa parameternya gak pake $data?
    }
    public function findDetail($id){ //kenapa namanya findDetail? fungsi ini buat apa
      $hasil = $this->db->where('username',$id)->limit(1)->get('akun');
      if($hasil->num_rows() > 0){
        return $hasil->row();
      }
      else {
        return array();
      }
    }
  }
?>