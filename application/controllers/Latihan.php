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

		//first construct
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_data_siswa");
	}
		//index
	public function index()
	{
		$data['siswa'] = $this->m_data_siswa->get_data('tb_siswa');
		$this->load->view('index',$data);
	}
		//create page redirect
	public function create_page()
	{
		$this->load->view('create_page');
	}

		// create function to database
	public function create()
	{
		$nama=$this->input->post('siswa');
		$NISN=$this->input->post('NISN');
		$nohp=$this->input->post('nohp');
		$status=$this->input->post('status');
		$data = [
			'id_siswa' => NULL,
			'nama_siswa' => $nama,
			'NISN' => $NISN,
			'no_hp' => $nohp,
			'status' => $status
		];
		$this->m_data_siswa->insert('tb_siswa',$data);
		redirect(base_url('latihan'));
	}

		//delete data
	public function delete($id)
	{
		$this->m_data_siswa->delete($id,'id_siswa','tb_siswa');
		redirect(base_url('latihan'));
	}

		// edit data
	public function edit($id)
	{
		$nama=$this->input->post('siswa');
		$NISN=$this->input->post('NISN');
		$nohp=$this->input->post('nohp');
		$status=$this->input->post('status');
		$data= [
			'nama_siswa' => $nama,
			'NISN' => $NISN,
			'no_hp' => $nohp,
			'status' => $status
		];
		$this->m_data_siswa->edit('tb_siswa','id_siswa',$data,$id);
		redirect(base_url('latihan'));
	}

		// redirect edit page
	public function edit_page($id)
	{
		$data['edit'] = $this->m_data_siswa->get_edit('tb_siswa','id_siswa',$id);
		$this->load->view('edit_page',$data);

	}
}
