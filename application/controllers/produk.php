<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    
   public function __construct()
   {
    parent::__construct();
    $this->load->model("produk_model");
    
   }
    
    public function index()
	{
        $data['title'] = "Data produk";
        $data['produk'] = $this->produk_model->get_data('produk')->result();
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('produk', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah produk";
       
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('tambah_pesanan');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
$data = array(
    'id' => $this->input->post('id'),
    'kode' => $this->input->post('kd'),
    'nama' => $this->input->post('nm'),
    'stok' => $this->input->post('stk'),
    'harga_beli' => $this->input->post('hrg_bli'),
    'harga_jual' => $this->input->post('hrg_jl'),
    'foto' => $this->input->post('ft'),
    'jenis_id' => $this->input->post('jns_id'),
    'deskripsi' => $this->input->post('dsk'),
);
$this->pesanan_model->insert_data($data, 'pesanan');
redirect('pesanan');
}
public function edit($id)
{
    $data = array(
        'id' => $this->input->post('id'),
        'kode' => $this->input->post('kd'),
        'nama' => $this->input->post('nm'),
        'stok' => $this->input->post('stk'),
        'harga_beli' => $this->input->post('hrg_bli'),
        'harga_jual' => $this->input->post('hrg_jl'),
        'foto' => $this->input->post('ft'),
        'jenis_id' => $this->input->post('jns_id'),
        'deskripsi' => $this->input->post('desk'),
    );
    $this->produk_model->update_data($data, 'produk');
    redirect('produk');
}
public function delete($id)
{
$where = array('id' => $id);
$this->produk_model->delete_data($where, 'produk');
redirect('produk');
}
    
}