<?php
class ArtikelModel extends CI_Model
{
    public function getArticle($id = null)
    {
        if ($id == null) {
            $this->db->select('*');
            $this->db->from('artikel');
            return $this->db->get()->result_array();
        } else {
            $this->db->select('*');
            $this->db->from('artikel');
            $this->db->where("id='" . $id . "'");
            return $this->db->get()->result_array();
        }
    }

    public function getArticles($limit, $start)
    {
        return $this->db->get('artikel', $limit, $start)->result_array();
    }

    public function addArticle($data)
    {
        $this->db->insert('artikel', $data);
        return $this->db->affected_rows();
    }

    public function deleteArticle($id)
    {
        $this->db->delete('artikel', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updateArticle($data, $id)
    {
        $this->db->update('artikel', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function countArticle()
    {
        return $this->db->get('artikel')->num_rows();
    }
}
