<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('registro_m', '', TRUE);
	}

	public function index()
	{
		$this->load->view('registro/index');
	}
}
