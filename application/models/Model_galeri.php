<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_galeri extends CI_Model
{
    private $_table = "galeri";
    public $nama_galeri;
    public $gambar = "default.jpg";
    public $status;

    
    public function getAll(){
        $query = "SELECT * FROM $this->_table";
        return $this->db->query($query)->result();
    }
 
    public function getById($id)
    {
        return $this->db->query($query)->row();
    }

    public function tambahglr(){
        
        $post = $this->input->post();
        $this->nama_galeri = $post["nama_galeri"];
        $this->gambar = $this->uploadFiles();
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

    private function uploadFiles() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_galeri;
        $config['overwrite']			= true;
        $config['max_size']             = 3000; 
    
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());
        return "default.jpg";
    }

}