<?php 
class DFTS extends CI_Model {



public function daftarsiswa()
{
        $query = $this->db->get('kelas',5);
        return $query->result();
}
public function data_masuk($data)
{
        $this->nama=$data['nama'];
        $this->kelas=$data['kelas'];
        $this->jurusan=$data['jurusan'];
        $this->img=$data['img'];

        $this->db->insert('kelas', $this);
}
}