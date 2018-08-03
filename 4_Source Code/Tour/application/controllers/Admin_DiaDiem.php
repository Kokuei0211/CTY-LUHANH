<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_DiaDiem extends MY_Controller {
	public function diadiem() {
		$this->pageTitle = 'Địa Điểm';
		$this->curentPage = "Place";
		
		$data['listDD'] = $this->mAdmin->getListDD();
		
		$this->loadView('diadiem/diadiem', $data);
	}
	
	public function diadiem_create() {
		$this->pageTitle = 'Tạo Địa Điểm';
		$this->curentPage = "Place";
		
		if (isset($_POST["Create_DiaDiem"])) {
			$ma_tinh = trim($this->input->post('ma_tinh',true));
			$dia_chi = trim($this->input->post('dia_diem', true));
			$mo_ta = trim($this->input->post('mo_ta', true));
			
			$this->mAdmin->saveDD($dia_chi, $mo_ta, $ma_tinh);
			
			redirect('admin/diadiem');
		}
		
		$this->loadView('diadiem/diadiem_create');
	}
	
	public function diadiem_edit($id) {
		$this->pageTitle = 'Sửa Địa Điểm';
		$this->curentPage = "Place";
		
		if (isset($_POST["Edit_DiaDiem"])) {
			$ma_tinh = trim($this->input->post('ma_tinh',true));
			$dia_chi = trim($this->input->post('dia_diem', true));
			$mo_ta = trim($this->input->post('mo_ta', true));
			
			$this->mAdmin->editDD($id, $dia_chi, $mo_ta, $ma_tinh);
			
			redirect('admin/diadiem');
		}
		
		$dia_diem =  $this->mAdmin->getDD($id);
		
		$data['dia_diem'] = $dia_diem[0];
		
		$this->loadView('diadiem/diadiem_edit', $data);
	}
	
	public function diadiem_remove() {
		$ddID = trim($this->input->post('addressId', true));
		
		$this->mAdmin->deleteDD($ddID);
		
		$response = array();
		$response['success'] = 1;
		
		echo json_encode($response);
	}
}