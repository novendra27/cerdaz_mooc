<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
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
		$this->load->model('Control_model');
		// $this->load->library('Form_validation');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('test/view');
		$this->load->view('template/footer');
	}
	public function login()
	{
		$this->load->view('template/header');
		$this->load->view('test/login');
		$this->load->view('template/footer');
	}
	public function register()
	{
		$this->load->view('template/header');
		$this->load->view('test/register');
		$this->load->view('template/footer');
	}
	public function view()
	{
		$this->load->view('template/header');
		$this->load->view('pages/index');
		$this->load->view('template/footer');
	}
	public function pengajar()
	{
		$this->load->view('template/header');
		$this->load->view('pages/index');
		$this->load->view('template/footer');
	}
}
