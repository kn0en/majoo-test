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

    public function updateProfile($new_profile_image){
        $data = [
            'fullname' => htmlspecialchars($this->input->post('fullName', true)),
            'image' => $new_profile_image
        ];

        $this->db->set($data);
        return $this->db->update('tbl_admin');
    }

}