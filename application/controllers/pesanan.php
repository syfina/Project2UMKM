<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
    
   public function __construct()
   {
    parent::__construct();
    $this->load->model("pesanan_model");
    
   }
    
    public function index()
	{
        $data['title'] = "Data pesanan";
        $data['pesanan'] = $this->pesanan_model->get_data('pesanan')->result();
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('pesanan', $data);
        $this->load->view('template/foot');
    }

    public function tambah()
    {
        $data['title'] = "Tambah pesanan";
       
		$this->load->view('template/head', $data);
		// $this->load->view('template/side', $data);
        $this->load->view('tambah_pesanan');
        $this->load->view('template/foot');
    }
    public function tambah_aksi()
    {
$data = array(
    'id' => $this->input->post('id'),
    'tanggal' => $this->input->post('tgl'),
    'jumlah' => $this->input->post('jmlh'),
    'users_id' => $this->input->post('user_id'),
    'produk_id' => $this->input->post('prdk_id'),
);
$this->pesanan_model->insert_data($data, 'pesanan');
redirect('pesanan');
}
public function edit($id)
{
    $data = array(
        'id' => $this->input->post('id'),
        'tanggal' => $this->input->post('tgl'),
        'jumlah' => $this->input->post('jmlh'),
        'users_id' => $this->input->post('usr_id'),
        'produk_id' => $this->input->post('prdk_id'),
    );
    $this->pesanan_model->update_data($data, 'pesanan');
    redirect('pesanan');
}
public function delete($id)
{
$where = array('id' => $id);
$this->pesanan_model->delete_data($where, 'pesanan');
redirect('pesanan');
}
    
}