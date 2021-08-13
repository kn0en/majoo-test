<?php

class Product_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('product')->result_array();
    }

    public function getProductbyId($id)
    {
        return $this->db->get_where('product', ['id_product' => $id])->row_array();
    }

    public function insertProduct($new_image)
    {
        $data = [
            'name_product' => htmlspecialchars($this->input->post('productName', true)),
            'price' => htmlspecialchars($this->input->post('price', true)),
            'detail_product' => htmlspecialchars($this->input->post('productDetail', true)),
            'image_product' => $new_image
        ];

        $this->db->insert('product', $data);
    }

    public function listProduct()
    {
    }

    public function changeProduct($id)
    {

        $id  = $this->input->post('idproduct', true);
        $data = [
            'name_product' => htmlspecialchars($this->input->post('productName', true)),
            'detail_product' => htmlspecialchars($this->input->post('productDetail', true)),
            'price' => htmlspecialchars($this->input->post('price', true))
        ];

        $this->db->set($data);
        $this->db->where('id_product', $id);
        $this->db->update('product');
    }

    public function deleteProduct($id)
    {
        $this->db->delete('product', ['id_product' => $id]);
    }
}
