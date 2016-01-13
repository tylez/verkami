<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QuienSomos extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('quienSomos_m', '', TRUE);
	}

	public function index()
	{
		$this->load->view('quienSomos/index');
	}
}
