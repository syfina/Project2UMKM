<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_produk extends CI_Controller {
    
   public function __construct()
   {
    parent::__construct();
    $this->load->model("jenis_produk_model");
    
   }
    
    public function index()
	{
        $data['title'] = "Data jenis_produk";
        $data['jenis_produk'] = $this->jenis_produk_model->get_data('jenis_produk')->result();
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('jenis_produk', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah jenis_produk";
       
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('tambah_jenis_produk');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
$data = array(
    'id' => $this->input->post('nama'),
    'nama' => $this->input->post('nama'),
);
$this->jenis_produk_model->insert_data($data, 'jenis_produk');
redirect('jenis_produk');
}
public function edit($id)
{
    $data = array(
        'id' => $id,
        'id' => $this->input->post('id'),
        'nama' => $this->input->post('nama'),
        'produk' => $this->input->post('prdk'),
    );
    $this->jenis_produk_model->update_data($data, 'jenis_produk');
    redirect('jenis_produk');
}
public function delete($id)
{
$where = array('id' => $id);
$this->jenis_produk_model->delete_data($where, 'jenis_produk');
redirect('jenis_produk');
}
    
}