<?php

class C_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth');
    }
}
