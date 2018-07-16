<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Tour extends MY_Controller {
	public function tour() {
		
		$this->pageTitle = 'Tour';
		$this->curentPage = "tour";
		
		$this->loadView('tour/tour');
	}
	
	public function tour_create() {
		$this->pageTitle = 'Create Tour';
		$this->curentPage = "tour";
		$this->loadView('tour/tour_create');
	}
}