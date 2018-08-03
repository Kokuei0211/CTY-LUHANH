<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Tour extends MY_Controller {
	public function tour() {
		$this->pageTitle = 'Tour';
		$this->curentPage = "tour";
		
		$data['list_tour'] = $this->mAdmin->getListTour();
		
		$this->loadView('tour/tour', $data);
	}
	
	public function tour_create() {
		$this->pageTitle = 'Create Tour';
		$this->curentPage = "tour";
		
		$data['listDD'] = $this->mAdmin->getListDD();
		$data['listXe'] = $this->mAdmin->getListXe();
		
		if (isset($_POST['Create_Tour'])) {
			$name_tour = trim($this->input->post('title_tour',true));
			$address_from = trim($this->input->post('address_from', true));
			$address_to = trim($this->input->post('address_to', true));
			$date_from = trim($this->input->post('date_from', true));
			$date_to = trim($this->input->post('date_to', true));
			$price = trim($this->input->post('price', true));
			$car_number = trim($this->input->post('car_number', true));
			$linkImage = '';
			
			if (isset($_FILES['picture_tour'])) {
				$photoPlaceFile = $_FILES['picture_tour'];
				$cpt = count($photoPlaceFile['name']);
				if ($cpt > 0 && strlen($photoPlaceFile['name']) > 2) {
					// Save Image
					$type = substr($photoPlaceFile['name'], strlen($photoPlaceFile['name']) - 4, 4);
					
					$linkImage = $this->doUploadImage($photoPlaceFile, $name_tour.'_'.date('Y-m-d_H:i:s'));
					
				}
			}
			
			$this->mAdmin->insertTour($name_tour,$address_from, $address_to, $date_from, $date_to, $price, $car_number, $linkImage);
			
			redirect('admin/tour');
		}
		
		$this->loadView('tour/tour_create', $data);
	}
	
	public function tour_edit($id) {
		$this->pageTitle = 'Edit Tour';
		$this->curentPage = "tour";
		
		$tour = $this->mAdmin->getTour($id);
		$data['listDD'] = $this->mAdmin->getListDD();
		$data['listXe'] = $this->mAdmin->getListXe();
		
		$data['tour'] = $tour[0];
		
		if (isset($_POST['Edit_Tour'])) {
			$name_tour = trim($this->input->post('title_tour',true));
			$address_from = trim($this->input->post('address_from', true));
			$address_to = trim($this->input->post('address_to', true));
			$date_from = trim($this->input->post('date_from', true));
			$date_to = trim($this->input->post('date_to', true));
			$price = trim($this->input->post('price', true));
			$car_number = trim($this->input->post('car_number', true));
			$linkImage = '';
			
			if (isset($_FILES['picture_tour'])) {
				$photoPlaceFile = $_FILES['picture_tour'];
				$cpt = count($photoPlaceFile['name']);
				if ($cpt > 0 && strlen($photoPlaceFile['name']) > 2) {
					// Save Image
					$type = substr($photoPlaceFile['name'], strlen($photoPlaceFile['name']) - 4, 4);
					
					$linkImage = $this->doUploadImage($photoPlaceFile, $name_tour.'_'.date('Y-m-d_H:i:s'));
					
				}
			}
			
			$this->mAdmin->updateTour($id,$name_tour,$address_from, $address_to, $date_from, $date_to, $price, $car_number, $linkImage);
			
			redirect('admin/tour');
		}
		
		$this->loadView('tour/tour_edit', $data);
	}
	
	public function tour_delete() {
		$tour_id = trim($this->input->post('tourId', true));
		
		$this->mAdmin->deleteDatTour($tour_id);
		$this->mAdmin->deleteLichTrinh($tour_id);
		$this->mAdmin->deleteTour($tour_id);
		
		$response = array();
		$response['success'] = 1;
		
		echo json_encode($response);
	}
}