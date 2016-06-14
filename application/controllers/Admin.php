<?php

/**
 * Created by PhpStorm.
 * User: jasonchang
 * Date: 2016/6/7
 * Time: 下午9:50
 */
class Admin extends CI_Controller
{
    public function index(){
        // show view
        $this->load->view('admin/admin_index');
    }
    /**
     * for most of admin page and default page
     * @param string $page the argument in base_url/controller/argument
     */
    public function view($page = 'admin_index')
    {
        if (!file_exists(APPPATH . 'views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        // show view
        $this->load->view('admin/' . $page);
    }
    
}