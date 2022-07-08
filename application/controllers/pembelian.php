<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
    
   public function __construct()
   {
    parent::__construct();
    $this->load->model("pembelian_model");
    
   }
    
    public function index()
	{
        $data['title'] = "Data pembelian";
        $data['pembelian'] = $this->pembelian_model->get_data('pembelian')->result();
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('pembelian', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah pembelian";
       
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('tambah_pembelian');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
    $data = array(
    'id' => $this->input->post('id'),
    'tanggal' => $this->input->post('tgl'),
    'jumlah' => $this->input->post('jmlh'),
    'harga' => $this->input->post('harga'),
    'produk_id' => $this->input->post('prdk_id'),
    'suplier_id' => $this->input->post('splr_id'),

);
$this->pembelian_model->insert_data($data, 'pembelian');
redirect('pembelian');
}
public function edit($id)
{
    $data = array(
        'id' => $id,
        'id' => $this->input->post('id'),
        'tanggal' => $this->input->post('tgl'),
        'jumlah' => $this->input->post('hrg'),
        'produk' => $this->input->post('prdk_id'),
        'suplier' => $this->input->post('splr_id'),
    );
    $this->pembelian_model->update_data($data, 'pembelian');
    redirect('pembelian');
}
public function delete($id)
{
$where = array('id' => $id);
$this->pembelian_model->delete_data($where, 'pembelian');
redirect('pembelian');
}
    
}