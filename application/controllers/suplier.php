<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {
    
   public function __construct()
   {
    parent::__construct();
    $this->load->model("suplier_model");
    
   }
    
    public function index()
	{
        $data['title'] = "Data suplier";
        $data['suplier'] = $this->suplier_model->get_data('suplier')->result();
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('suplier', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah suplier";
       
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('tambah_suplier');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
$data = array(
    'id' => $this->input->post('id'),
    'nama' => $this->input->post('nm'),
    'kota' => $this->input->post('kt'),
    'kontak' => $this->input->post('kntk'),
    'alamat' => $this->input->post('almt'),
    'telpon' => $this->input->post('tlp'),
);
$this->suplier_model->insert_data($data, 'suplier');
redirect('suplier');
}
public function edit($id)
{
    $data = array(
        'id' => $this->input->post('id'),
        'nama' => $this->input->post('nm'),
        'kota' => $this->input->post('kt'),
        'kontak' => $this->input->post('kntk'),
        'alamat' => $this->input->post('almt'),
        'telpon' => $this->input->post('tlp'),
    );
    $this->suplier_model->update_data($data, 'suplier');
    redirect('suplier');
}
public function delete($id)
{
$where = array('id' => $id);
$this->suplier_model->delete_data($where, 'suplier');
redirect('suplier');
}
    
}