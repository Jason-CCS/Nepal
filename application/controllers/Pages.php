<?php

/**
 * Class Pages
 * this is the controller for load normal pages.
 */
class Pages extends CI_Controller
{
    /**
     * for most of simple page and default page
     * @param string $page the argument in base_url/controller/argument
     */
    public function view($page = 'index')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        // show view
        $this->load->view('pages/' . $page, $data);
    }
}