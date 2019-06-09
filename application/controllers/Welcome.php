<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Welcome extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->form_validation->run($this);

    }

    public function index()
    {
        $this->load->view('welcome_message');
    }
}
