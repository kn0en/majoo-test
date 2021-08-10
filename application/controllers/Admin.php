<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['heading'] = 'Admin | Dashboard';
        $data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function myprofile()
    {
        $data['heading'] = 'Admin | My Profile';
        $data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/myprofile', $data);
        $this->load->view('templates/admin_footer');
    }

    public function addproduct()
    {
        $data['heading'] = 'Admin | Add Product';
        $data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('productName', 'Product Name', 'required|trim|is_unique[product.name_product]',  [
            'is_unique' => 'The Product Name already in Database!'
        ]);
        $this->form_validation->set_rules('productDetail', 'Product Detail', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addproduct', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $upload_image = $_FILES['imageproduct']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/product/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('imageproduct')) {

                    $new_image = $this->upload->data('file_name');

                    $this->Product_model->insertProduct($new_image);

                    $this->session->set_flashdata('messageAddData', '<div class="alert alert-success text-center" role="alert">Success! Product has been added.</div>');
                    redirect('Admin/addproduct');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }

    public function listproduct()
    {
        $data['heading'] = 'Admin | List Product';
        $data['product'] = $this->Product_model->getAllProduct();
        $data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/listproduct', $data);
        $this->load->view('templates/admin_footer');
    }

    public function revieworder()
    {
        $data['heading'] = 'Admin | Review Order';
        $data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/revieworder', $data);
        $this->load->view('templates/admin_footer');
    }

    public function deleteproduct($id)
    {
        $this->Product_model->deleteProduct($id);

        $this->session->set_flashdata('messageDelete', '<div class="alert alert-danger text-center" role="alert">Success! Product has been deleted.</div>');
        redirect('Admin/listproduct');
    }

    public function changeproduct($id)
    {
        $data['heading'] = 'Admin | Change Product';
        $data['user'] = $this->db->get_where('tbl_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['product'] = $this->Product_model->getProductbyId($id);

        $this->form_validation->set_rules('productName', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('productDetail', 'Product Detail', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/changeproduct', $data);
            
        }else{
            $this->Product_model->changeProduct();

            $this->session->set_flashdata('messageChangeData', '<div class="alert alert-success text-center" role="alert">Success! Product has been changed.</div>');
            redirect('Admin/listproduct');
        }
    }
}
