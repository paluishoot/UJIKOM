<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
    public function lihat_data()
    {
        return $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left');
        return $this->db->get('mahasiswa')->result();
    }
}