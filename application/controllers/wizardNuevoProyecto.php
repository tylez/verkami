<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wizardNuevoProyecto extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('nuevoProyecto', '', TRUE);
	}

	public function index()
	{
		$this->load->view('wizardNuevoProyecto/index');
	}
}