<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('v_home');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->load->view('v_register');
	}

	public function register2()
	{
		$this->load->view('v_register2');
	}

	public function surat_saya()
	{
		$this->load->view('v_surat_saya');
	}
}
