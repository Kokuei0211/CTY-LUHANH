<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_DatTour extends MY_Controller {
	
	public function dattour() {
		$this->pageTitle = 'Đặt Tour';
		$this->curentPage = "Bill";
		
		$data['list_dt'] = $this->mAdmin->getListDT();
		
		$this->loadView('dattour/dattour', $data);
	}
	
	public function dattour_create() {
		$this->pageTitle = 'Đặt Tour';
		$this->curentPage = "Bill";
		
		$data['list_kh'] = $this->mAdmin->getListKH();
		$data['list_tour'] = $this->mAdmin->getListTour();
		
		if (isset($_POST['Create_DatTour'])) {
			$ma_kh = trim($this->input->post('kh_dt', true));
			$ma_tour = trim($this->input->post('tour_dt', true));
			$so_luong = trim($this->input->post('so_luong', true));
			$ghi_chu = trim($this->input->post('ghi_chu', true));
			
			$dtID = $this->mAdmin->createDatTour($ma_kh, $ma_tour, $so_luong, $ghi_chu);
			
			redirect('admin/dattour');
		}
		
		$this->loadView('dattour/dattour_create', $data);
	}
	
	public function dattour_edit($id) {
		$this->pageTitle = 'Đặt Tour';
		$this->curentPage = "Bill";
		
		$data['list_kh'] = $this->mAdmin->getListKH();
		$data['list_tour'] = $this->mAdmin->getListTour();
		
		$dattour = $this->mAdmin->getDT($id);
		
		if (isset($_POST['Edit_DatTour'])) {
			$ma_kh = trim($this->input->post('kh_dt', true));
			$ma_tour = trim($this->input->post('tour_dt', true));
			$so_luong = trim($this->input->post('so_luong', true));
			$ghi_chu = trim($this->input->post('ghi_chu', true));
			
			$dtID = $this->mAdmin->editDatTour($id, $ma_kh, $ma_tour, $so_luong, $ghi_chu);
			
			redirect('admin/dattour');
		}
		
		$data['dattour'] = $dattour[0];
		$this->loadView('dattour/dattour_edit', $data);
	}
	
	public function dattour_remove() {
		$dt_id = trim($this->input->post('dtID',true));
		
		$this->mAdmin->deleteDatTourID($dt_id);
		
		$response = array();
		$response['success'] = 1;
		
		echo json_encode($response);
	}
}