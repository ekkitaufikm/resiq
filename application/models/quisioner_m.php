<?php defined('BASEPATH') OR exit('No direct script access allowed');

class quisioner_m extends CI_Model {
    public function get($id = null)
    {
        $this->db->from('tambah_responden');
        if($id != null){
            $this->db->where('idUJenis', $id);

        }
        $query = $this->db->get();
        return $query;
    }
}