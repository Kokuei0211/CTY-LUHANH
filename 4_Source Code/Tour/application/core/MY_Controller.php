<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
 		$this->load->library('session');
		$this->load->model('admin_model', 'mAdmin');
		$this->load->helper('cookie');
		//$this->load->helper('common');
	}
	
	public function loadView($viewFile = '', $data = array()) {
		$data['view'] = 'admin/' . $viewFile;
		$this->load->view('admin/index', $data);
	}
	
	function doUploadImage($files, $id) {
		$path = 'image_upload/';
		$config = array();
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE;
		$this->load->library('upload');
		$this->upload->initialize($config);

		$cpt = count($files['name']);
		$arrPath = "";
		if ($cpt > 0 && strlen($files['name']) > 2) {
			$typefile = substr($files['name'], strlen($files['name']) - 4, 4);
			$file_name = $id.$typefile;
			$_FILES['userfile']['name'] = $file_name;
			$_FILES['userfile']['type'] = $files['type'];
			$_FILES['userfile']['tmp_name'] = $files['tmp_name'];
			$_FILES['userfile']['error'] = $files['error'];
			$_FILES['userfile']['size'] = $files['size'];
			$arrPath = $path . $file_name;
			$this->upload->do_upload();
		}

		return $arrPath;
	}
}
