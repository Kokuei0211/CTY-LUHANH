<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Xe extends MY_Controller {
	public function xe() {
		$this->pageTitle = 'Xe';
		$this->curentPage = "Car";
		
		$data['listXe'] = $this->mAdmin->getListXe();
		
		$this->loadView('xe/xe', $data);
	}
	
	public function xe_create() {
		$this->pageTitle = 'Tạo Xe';
		$this->curentPage = "Car";
		
		$data['ma_xe'] = '';
		$data['loai_xe'] = '';
		$data['so_cho'] = '';
		$data['ngay_btri'] = '';
		$data['mau_xe'] = '';
		$data['tai_xe'] = '';
		
		if (isset($_POST["Create_Xe"])) {
			$ma_xe = trim($this->input->post('ma_xe',true));
			$loai_xe = trim($this->input->post('loai_xe', true));
			$mau_xe = trim($this->input->post('mau_xe', true));
			$so_cho = trim($this->input->post('so_cho', true));
			$ngay_baotri = trim($this->input->post('ngay_btri', true));
			$tai_xe = trim($this->input->post('tai_xe', true));
			
			$exits_maxe = $this->mAdmin->checkMaXe($ma_xe);
			
			if ($exits_maxe) {
				$data['ma_xe'] = $ma_xe;
				$data['loai_xe'] = $loai_xe;
				$data['so_cho'] = $so_cho;
				$data['ngay_btri'] = $ngay_baotri;
				$data['mau_xe'] = $mau_xe;
				$data['tai_xe'] = $tai_xe;
				
				$this->session->set_flashdata('msg_error', 'Biển số xe đã tồn tại.');
				
			} else {
				$this->mAdmin->saveXe($ma_xe, $loai_xe, $mau_xe, $so_cho, $ngay_baotri, $tai_xe);
				redirect('admin/xe');
			}
		}
		
		$this->loadView('xe/xe_create', $data);
	}
	
	public function xe_edit($id) {
		$this->pageTitle = 'Sửa Xe';
		$this->curentPage = "Car";
		
		$data['ma_xe'] = '';
		$data['loai_xe'] = '';
		$data['so_cho'] = '';
		$data['ngay_btri'] = '';
		$data['mau_xe'] = '';
		$data['tai_xe'] = '';
		
		$xe =  $this->mAdmin->getXe($id);
		
		if (count($xe) > 0) {
			$data['ma_xe'] = $xe[0]->MA_XE;
			$data['loai_xe'] = $xe[0]->LOAI_XE;
			$data['so_cho'] = $xe[0]->SO_CHO;
			$data['ngay_btri'] = $xe[0]->NGAY_BTRI;
			$data['mau_xe'] = $xe[0]->MAU_XE;
			$data['tai_xe'] = $xe[0]->TAI_XE;
		}
		
		if (isset($_POST["Edit_Xe"])) {
			$ma_xe = trim($this->input->post('ma_xe',true));
			$loai_xe = trim($this->input->post('loai_xe', true));
			$mau_xe = trim($this->input->post('mau_xe', true));
			$so_cho = trim($this->input->post('so_cho', true));
			$ngay_baotri = trim($this->input->post('ngay_btri', true));
			$tai_xe = trim($this->input->post('tai_xe', true));
			
			$exits_maxe = $this->mAdmin->checkMaXe($ma_xe);
			
			if ($exits_maxe && ($ma_xe != $xe[0]->MA_XE)) {
				$data['ma_xe'] = $ma_xe;
				$data['loai_xe'] = $loai_xe;
				$data['so_cho'] = $so_cho;
				$data['ngay_btri'] = $ngay_baotri;
				$data['mau_xe'] = $mau_xe;
				$data['tai_xe'] = $tai_xe;
				
				$this->session->set_flashdata('msg_error', 'Biển số xe đã tồn tại.');
				
			} else {
				$this->mAdmin->editXe($ma_xe, $loai_xe, $mau_xe, $so_cho, $ngay_baotri, $tai_xe);
				redirect('admin/xe');
			}
		}
		
		$this->loadView('xe/xe_edit', $data);
	}
	
	public function xe_remove() {
		$xeID = trim($this->input->post('xeId', true));
		
		$this->mAdmin->deleteXe($xeID);
		
		$response = array();
		$response['success'] = 1;
		
		echo json_encode($response);
	}
}