<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
 		$this->load->library('session');
		$this->load->helper('cookie');
		//$this->load->helper('common');
	}
	
	public function loadView($viewFile = '', $data = array()) {
		$data['view'] = 'admin/' . $viewFile;
		$this->load->view('admin/index', $data);
	}
	
	public function getData() {
		
	}
}
