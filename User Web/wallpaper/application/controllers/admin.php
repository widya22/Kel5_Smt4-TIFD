<?php
class Admin extends CI_Controller{

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

    public function index()
    {
        $data['admin'] = $this->m_admin->tampil_admin()->
        result();
        $this->load->view('Includes/header');
        $this->load->view('Admin/v_admin', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }

    public function tambah_admin()
    {
        $username   = $this->input->post('username_a');
        $password   = $this->input->post('password_a');

        $data=array(
            'username_a'  => $username,
            'password_a'  => $password,
        );

        $this->m_admin->input_data($data, 'tb_admin');
        redirect('admin/index');
    }

    public function hapus_admin($id)
    {
        $where = array ('id_a' => $id);
        $this->m_admin->hapus_data($where, 'tb_admin');
        redirect ('admin/index');
    }
    
    public function edit_admin($id)
    {
        // untuk mengenerate hasil query menjadi array
        $where = array ('id_a' => $id);
        $data['admin'] = $this->m_admin->edit_data($where, 'tb_admin')->result();
    
        //view untuk melakukan edit data
        $this->load->view('Includes/header');
        $this->load->view('Admin/v_edit_admin', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }

    public function update_admin()
    {
        $id         = $this->input->post('id_a');
        $username   = $this->input->post('username_a');
        $password   = $this->input->post('password_a');

        $data=array(
            'username_a'    => $username,
            'password_a'    => $password,
        );

        $where=array (
            'id_a' => $id
        );

        $this->m_admin->update_data($where, $data, 'tb_admin');
        redirect ('admin/index');
    }

    public function lihat_admin($id)
    {
        $this->load->model('m_admin');
        $lihat_admin=$this->m_admin->lihat_data($id);
        $data['lihat_admin']=$lihat_admin;
        
        //view untuk melihat data lengkap admin
        $this->load->view('Includes/header');
        $this->load->view('Admin/v_lihat_admin', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }
}