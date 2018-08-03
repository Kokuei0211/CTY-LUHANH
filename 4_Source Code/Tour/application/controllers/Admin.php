<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {	
	public function login() {
		$data['email'] = '';
		$data['pass'] = '';
		
		if (isset($_POST['admin_login'])) {
			$email = trim($this->input->post('admin_email', true));
			$pass = trim($this->input->post('admin_pass', true));
			if ( ($email != ADMIN_EMAIL) || ($pass != ADMIN_PASS) ) {
				$data['email'] = $email;
				$data['pass'] = $pass;
				$this->session->set_flashdata('msg_error', 'Your email address and/ or password is correct.');
			} else {
				return redirect("admin/tour");
			}
		}
		
		$this->load->view('admin/login', $data);
	}
}