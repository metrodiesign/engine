<?php
defined('BASEPATH') || exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
    protected $data = [];
    protected $base_url = null;
    protected $base_url_core_template = null;
    protected $base_url_backend = null;
    protected $base_url_backend_template = null;
    protected $backend_template_path = null;
    protected $base_url_frontend = null;
    protected $base_url_frontend_template = null;
    protected $frontend_template_path = null;
    protected $enum_frontend_language = [];

    public function __construct()
    {
        parent::__construct();

        // ตั้งค่าเริ่มต้น Time Zone
        date_default_timezone_set("Asia/Bangkok");

        // ตั้งค่าเริ่มต้น charset
        $this->data['charset'] = (!empty($this->config->item('charset'))) ? $this->config->item('charset') : 'UTF-8';

        $this->load->config('template');
        $this->load->helper(['url', 'language', 'form', 'string']);

        $this->base_url = rtrim(base_url(), '/');
        $this->base_url_core_template = trim($this->base_url . '/' . rtrim($this->config->item('base_url_core_template'), '/'));
        $this->base_url_backend = trim($this->base_url . '/' . rtrim($this->config->item('base_url_backend'), '/'));
        $this->base_url_backend_template = trim($this->base_url . '/' . rtrim($this->config->item('base_url_backend_template'), '/'));
        $this->backend_template_path = rtrim($this->config->item('backend_template_path'), '/');
        $this->base_url_frontend = trim($this->base_url);
        $this->base_url_frontend_template = trim($this->base_url . '/' . rtrim($this->config->item('base_url_frontend_template'), '/'));
        $this->frontend_template_path = rtrim($this->config->item('frontend_template_path'), '/');
        $this->enum_frontend_language = $this->config->item('enum_frontend_language');

        $this->output->set_header('Cache-Control: no-cache, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('X-Content-Type-Options: nosniff');
        $this->output->set_header('X-Frame-Options: DENY');
        $this->output->set_header('X-XSS-Protection: 1; mode=block');
    }
}
