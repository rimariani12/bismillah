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
        $query = "SELECT * FROM $this->_table WHERE id_galeri = $id";
        return $this->db->query($query)->row();
    }



    public function tambahglr(){
        
        $post = $this->input->post();
        $this->nama_galeri = $post["nama_galeri"];
        $this->gambar = $this->uploadFiles();
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

    public function upload(){
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config);
        if($this->upload->do_upload('gambar')){ 
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
      }

      public function save($upload, $gambar){
        $id_galeri =$this->input->post('id_galeri');
	      $nama_galeri =$this->input->post('nama_galeri');
	      $status =$this->input->post('status');
        $data = array(
          'nama_galeri' => $nama_galeri,
          'gambar' => $gambar["file_name"],
          'status' => $status
        );
        $model = $this->db->insert('galeri', $data);
        return $model;
      }



      public function hapusGaleri($id_galeri){
		    $this->db->delete('galeri', ['id_galeri' => $id_galeri]);
      }
      

      public function update_galeri($where, $data){
        $query = $this->db->where($where);
        $query = $this->db->update($this->_table,$data);
        return $query;
      }
}