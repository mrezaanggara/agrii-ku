<?php

class UsersModel extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        return $this->db->get();
    }

    public function getUsers($id = null)
    {
        if ($id == null) {
            $this->db->select('*');
            $this->db->from('users');
            return $this->db->get()->result_array();
        } else {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where("id ='" . $id . "'");
            return $this->db->get()->result_array();
        }
    }

    public function addUsers($data)
    {
        $this->db->insert('users', $data);
        return $this->db->affected_rows();
    }

    public function deleteUsers($id)
    {
        $this->db->delete('users', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updateUsers($data, $id)
    {
        $this->db->update('users', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
