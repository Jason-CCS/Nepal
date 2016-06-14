<?php

class Post_model extends CI_Model
{
    public $pk;
    public $title;
    public $body;
    public $createTime;
    public $editTime;
    public $postURL;
    public $categoryID;
    public $authorID;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_blogs($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('blogs');
            return $query->result_array();
        }

        $query = $this->db->get_where('blogs', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_blog()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('blogs', $data);
    }
}