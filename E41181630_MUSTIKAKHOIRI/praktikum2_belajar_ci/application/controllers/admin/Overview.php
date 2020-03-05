<?php

// membuat class Overview yang mewarisi sifat dari class CI_Controller
class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();	//digunakan agar tidak menimpa __construct parent
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}