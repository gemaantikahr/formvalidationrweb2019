
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model{

    public function pengguna_masuk($email,$pass){

        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email',$email);
        $this->db->where('password',$pass);

        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
            return false;
        }
    }


}