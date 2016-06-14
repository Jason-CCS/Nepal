<?php

/**
 * Created by IntelliJ IDEA.
 * User: jasonchang
 * Date: 2016/6/14
 * Time: 上午11:52
 */
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
    }

    public function create(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'text', 'required');

            if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('news/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }
}