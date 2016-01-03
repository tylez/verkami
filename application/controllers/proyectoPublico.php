<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proyectoPublico extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('proyecto_m', '', TRUE);
	}

	public function index()
	{
		$this->load->view('proyectoPublico/index');
	}
}