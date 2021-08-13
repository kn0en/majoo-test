<?php

class Admin_model extends CI_Model {
    public function insertDataAdmin()
    {
        $data = [
            'fullname' => htmlspecialchars($this->input->post('fullname', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'image' => 'default_image.svg',
            'password' => password_hash($this->input->post('password1'),PASSWORD_BCRYPT)
        ];

        $this->db->insert('tbl_admin',$data);
    }

    public function updateProfile(){
        $data = [
            'fullname' => htmlspecialchars($this->input->post('fullName', true)),
        ];

        $this->db->set($data);
        return $this->db->update('tbl_admin');
    }

}
