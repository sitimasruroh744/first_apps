<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{$data['nama']='kuro';
	 $data['kelas']='XI RPL 1';
	 $this->load->model('DFTS');
	$data['database']=$this->DFTS->daftarsiswa();
		
		$this->load->view('template/head');
		$this->load->view('template/sitebar');
		$this->load->view('template/topbar');
        $this->load->view('template/section',$data);
        $this->load->view('template/foot');
	}
	public function upload_view(Type $var = null)
	{
		$this->load->view('template/head');
		$this->load->view('template/sitebar');
		$this->load->view('template/topbar');
        $this->load->view('template/section_input');
		$this->load->view('template/foot');
	}
	public function kirim()
	{
		$data=$_POST;
		$this->load->model('DFTS');
		$this->DFTS->data_masuk($data);
		redirect("/");
	}
}
