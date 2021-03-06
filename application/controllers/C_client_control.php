<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_client_control extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_control_model');
	}
	public function index()
	{
		$data['title'] = "home";
		$this->load->view('template/header', $data);
		$this->load->view('client/landing');
		$this->load->view('template/footer');
	}
	public function login()
	{
		$data['title'] = "login";
		$this->load->view('template/header', $data);
		$this->load->view('client/login');
		$this->load->view('template/footer');
	}
	public function register()
	{
		$data['title'] = "register";
		$this->load->view('template/header', $data);
		$this->load->view('client/register');
		$this->load->view('template/footer');
	}
}
