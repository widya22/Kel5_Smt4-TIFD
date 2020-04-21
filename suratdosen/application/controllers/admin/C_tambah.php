<?php

class Overview extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/coba);
    
	}
}