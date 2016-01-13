<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('busqueda_m', '', TRUE);
	}

	public function index()
	{
		$this->load->view('busqueda/index');
	}
}
