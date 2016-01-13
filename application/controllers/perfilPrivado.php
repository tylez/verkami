<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PerfilPrivado extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('perfilPrivado_m', '', TRUE);
	}

	public function index()
	{
		$this->load->view('perfilPrivado/index');
	}
}
