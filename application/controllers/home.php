<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('home_m', '', TRUE);
	}

	public function index()
	{
		$this->load->view('home/index');
	}
}
