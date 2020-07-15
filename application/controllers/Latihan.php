<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	// /**
	//  * Index Page for this controller.
	//  *
	//  * Maps to the following URL
	//  * 		http://example.com/index.php/welcome
	//  *	- or -
	//  * 		http://example.com/index.php/welcome/index
	//  *	- or -
	//  * Since this controller is set as the default controller in
	//  * config/routes.php, it's displayed at http://example.com/
	//  *
	//  * So any other public methods not prefixed with an underscore will
	//  * map to /index.php/welcome/<method_name>
	//  * @see https://codeigniter.com/user_guide/general/urls.html
	//  */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	// fungsi untuk me redirect ke halaman tambah data (create_page)
	public function create_page()
	{
		$this->load->view('v_create_page');
	}

	// fungsi untuk menambah data
	public function create()
	{
		$this->load->model('m_data_siswa');

		$nama=$this->input->post('siswa');
		$NISN=$this->input->post('NISN');
		$status=$this->input->post('status');

		$data = [
			'id_siswa' => NULL,
			'nama_siswa' => $nama,
			'NISN' => $NISN,
			'status' => $status
		];

		$this->m_data_siswa->insert('tb_siswa',$data);

		redirect(base_url('latihan'));

	}
	// fungsi untuk menampilkan data(read)
	public function index()
	{
		$this->load->model('m_data_siswa');

		$data['siswa'] = $this->m_data_siswa->get_data('tb_siswa');

		$this->load->view('v_CRUD',$data);
	}

	// menghapus data
	public function delete($id)
	{
		$this->load->model('m_data_siswa');

		$this->m_data_siswa->delete($id,'id_siswa','tb_siswa');

		redirect(base_url('latihan'));
	}

	// mengedit data
	public function edit($id)
	{
		$this->load->model('m_data_siswa');

		$nama=$this->input->post('siswa');
		$NISN=$this->input->post('NISN');
		$status=$this->input->post('status');

		$data= [
			'nama_siswa' => $nama,
			'NISN' => $NISN,
			'status' => $status
		];

		$this->m_data_siswa->edit('tb_siswa','id_siswa',$data,$id);

		redirect(base_url('latihan'));
	}

	// redirect edit page
	public function edit_page($id)
	{
		$this->load->model('m_data_siswa');

		$data['edit'] = $this->m_data_siswa->get_edit('tb_siswa','id_siswa',$id);

		$this->load->view('v_edit_page',$data);

	}
}
