<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }
	
	public function index()
	{
        $data['heading'] = 'Majoo Product | Home';

		$data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();

		$data['product'] = $this->Product_model->getAllProduct();

        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar',$data);
		$this->load->view('product_home/index',$data);
        $this->load->view('templates/footer');
	}
}
