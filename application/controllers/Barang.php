<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model');

  }

  public function index()
  {
    $data['judul'] = "Halaman Barang";
    $data ['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['Barang'] = $this->Barang_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("barang/vw_barang",$data);
    $this->load->view("layout/footer", $data);
  }

  public function tambah()
  {
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Barang'] = $this->Barang_model->get();
    
        $this->form_validation->set_rules('nama_awal_penerima', 'Nama Awal', 'required', [
            'required' => 'Nama Awal Penerima Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_akhir_penerima', 'Nama Akhir', 'required', [
            'required' => 'Nama Akhir Penerima Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat_penerima', 'Alamat Penerima', 'required', [
            'required' => 'Alamat Penerima Wajib di isi'
        ]);
        $this->form_validation->set_rules('provinsi_penerima', 'Provinsi', 'required', [
            'required' => 'Provinsi Penerima Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_penerima', 'Kabupaten', 'required', [
            'required' => 'Kabupaten Penerima Wajib di isi'
        ]);
        $this->form_validation->set_rules('kode_pos_penerima', 'Kode Pos', 'required|integer', [
            'required' => 'Kode Pos Penerima Wajib di isi',
            'integer' => 'Kode Pos harus Angka'
        ]);
        $this->form_validation->set_rules('telepon_penerima', 'Telepon', 'required|integer', [
            'required' => 'Telepon Penerima Wajib di isi',
            'integer' => 'Telepon harus Angka'
        ]);
        
        $this->form_validation->set_rules('nama_awal_pengirim', 'Nama Awal Pengirim', 'required', [
            'required' => 'Nama Awal Pengirim Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_akhir_pengirim', 'Nama Akhir Pengirim', 'required', [
            'required' => 'Nama Akhir Pengirim Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat_pengirim', 'Alamat Pengirim', 'required', [
            'required' => 'Alamat Pengirim Wajib di isi'
        ]);
        $this->form_validation->set_rules('provinsi_pengirim', 'Provinsi Pengirim', 'required', [
            'required' => 'Provinsi Pengirim Wajib di isi'
        ]);
        $this->form_validation->set_rules('kabupaten_pengirim', 'Kabupaten Pengirim', 'required', [
            'required' => 'Kabupaten Pengirim Wajib di isi'
        ]);
        $this->form_validation->set_rules('kode_pos_pengirim', 'Kode Pos Pengirim', 'required|integer', [
            'required' => 'Kode Pos Pengirim Wajib di isi',
            'integer' => 'Kode Pos Pengirim harus Angka'
        ]);
        $this->form_validation->set_rules('telepon_pengirim', 'Telepon Pengirim', 'required|integer', [
            'required' => 'Telepon Pengirim Wajib di isi',
            'integer' => 'Telepon Pengirim harus Angka'
        ]);
    
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("barang/Pengirimanbarang", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_awal_penerima' => $this->input->post('nama_awal_penerima'),
                'nama_akhir_penerima' => $this->input->post('nama_akhir_penerima'),
                'alamat_penerima' => $this->input->post('alamat_penerima'),
                'provinsi_penerima' => $this->input->post('provinsi_penerima'),
                'kabupaten_penerima' => $this->input->post('kabupaten_penerima'),
                'kode_pos_penerima' => $this->input->post('kode_pos_penerima'),
                'telepon_penerima' => $this->input->post('telepon_penerima'),
                'nama_awal_pengirim' => $this->input->post('nama_awal_pengirim'),
                'nama_akhir_pengirim' => $this->input->post('nama_akhir_pengirim'),
                'alamat_pengirim' => $this->input->post('alamat_pengirim'),
                'provinsi_pengirim' => $this->input->post('provinsi_pengirim'),
                'kabupaten_pengirim' => $this->input->post('kabupaten_pengirim'),
                'kode_pos_pengirim' => $this->input->post('kode_pos_pengirim'),
                'telepon_pengirim' => $this->input->post('telepon_pengirim'),
            ];
            $this->Barang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengiriman Barang Berhasil Ditambah!</div>');
            redirect('Barang');
        }
    }
    
    function edit($id)
{
    $data['judul'] = "Halaman Edit Data Pengiriman";
    $data['Barang'] = $this->Barang_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    
    $this->form_validation->set_rules('nama_awal_penerima', 'Nama Awal', 'required', [
        'required' => 'Nama Awal Penerima Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_akhir_penerima', 'Nama Akhir', 'required', [
        'required' => 'Nama Akhir Penerima Wajib di isi'
    ]);
    $this->form_validation->set_rules('alamat_penerima', 'Alamat Penerima', 'required', [
        'required' => 'Alamat Penerima Wajib di isi'
    ]);
    $this->form_validation->set_rules('provinsi_penerima', 'Provinsi', 'required', [
        'required' => 'Provinsi Penerima Wajib di isi'
    ]);
    $this->form_validation->set_rules('kabupaten_penerima', 'Kabupaten', 'required', [
        'required' => 'Kabupaten Penerima Wajib di isi'
    ]);
    $this->form_validation->set_rules('kode_pos_penerima', 'Kode Pos', 'required|integer', [
        'required' => 'Kode Pos Penerima Wajib di isi',
        'integer' => 'Kode Pos harus Angka'
    ]);
    $this->form_validation->set_rules('telepon_penerima', 'Telepon', 'required|integer', [
        'required' => 'Telepon Penerima Wajib di isi',
        'integer' => 'Telepon harus Angka'
    ]);
    
    $this->form_validation->set_rules('nama_awal_pengirim', 'Nama Awal Pengirim', 'required', [
        'required' => 'Nama Awal Pengirim Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_akhir_pengirim', 'Nama Akhir Pengirim', 'required', [
        'required' => 'Nama Akhir Pengirim Wajib di isi'
    ]);
    $this->form_validation->set_rules('alamat_pengirim', 'Alamat Pengirim', 'required', [
        'required' => 'Alamat Pengirim Wajib di isi'
    ]);
    $this->form_validation->set_rules('provinsi_pengirim', 'Provinsi Pengirim', 'required', [
        'required' => 'Provinsi Pengirim Wajib di isi'
    ]);
    $this->form_validation->set_rules('kabupaten_pengirim', 'Kabupaten Pengirim', 'required', [
        'required' => 'Kabupaten Pengirim Wajib di isi'
    ]);
    $this->form_validation->set_rules('kode_pos_pengirim', 'Kode Pos Pengirim', 'required|integer', [
        'required' => 'Kode Pos Pengirim Wajib di isi',
        'integer' => 'Kode Pos Pengirim harus Angka'
    ]);
    $this->form_validation->set_rules('telepon_pengirim', 'Telepon Pengirim', 'required|integer', [
        'required' => 'Telepon Pengirim Wajib di isi',
        'integer' => 'Telepon Pengirim harus Angka'
    ]);
  
    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_ubahbarang", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_awal_penerima' => $this->input->post('nama_awal_penerima'),
            'nama_akhir_penerima' => $this->input->post('nama_akhir_penerima'),
            'alamat_penerima' => $this->input->post('alamat_penerima'),
            'provinsi_penerima' => $this->input->post('provinsi_penerima'),
            'kabupaten_penerima' => $this->input->post('kabupaten_penerima'),
            'kode_pos_penerima' => $this->input->post('kode_pos_penerima'),
            'telepon_penerima' => $this->input->post('telepon_penerima'),
            'nama_awal_pengirim' => $this->input->post('nama_awal_pengirim'),
            'nama_akhir_pengirim' => $this->input->post('nama_akhir_pengirim'),
            'alamat_pengirim' => $this->input->post('alamat_pengirim'),
            'provinsi_pengirim' => $this->input->post('provinsi_pengirim'),
            'kabupaten_pengirim' => $this->input->post('kabupaten_pengirim'),
            'kode_pos_pengirim' => $this->input->post('kode_pos_pengirim'),
            'telepon_pengirim' => $this->input->post('telepon_pengirim'),
        ];
        $this->Barang_model->insert($data);
        $this->Barang_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Di Edit!</div>');
        redirect('Barang');
    }
}

  public function hapus($id)
  {
    $this->Barang_model->delete($id);
    $this->session->set_flashdata('message','<dic class="alert alert-succes" role="alert">Data Pengiriman Barang Berhasil Dihapus!</div>');
    redirect('Barang');
  }
}