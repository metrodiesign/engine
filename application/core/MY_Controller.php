<?php
defined('BASEPATH') || exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
    protected $data = [];

    public function __construct()
    {
        parent::__construct();

        // ตั้งค่าเริ่มต้น Time Zone
        date_default_timezone_set("Asia/Bangkok");

        $this->data['charset'] = (!empty($this->config->item('charset'))) ? $this->config->item('charset') : 'UTF-8';

        $this->output->set_header('Cache-Control: no-cache, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('X-Content-Type-Options: nosniff');
        $this->output->set_header('X-Frame-Options: DENY');
        $this->output->set_header('X-XSS-Protection: 1; mode=block');
    }
}