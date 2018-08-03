<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_LichTrinh extends MY_Controller {
	public function lichtrinh() {
		$this->pageTitle = 'Lịch Trình';
		$this->curentPage = "Plan";
		
		$data['list_lt'] = $this->mAdmin->getListLT();
		
		$this->loadView('lichtrinh/lichtrinh', $data);
	}
	
	public function lichtrinh_create() {
		$this->pageTitle = 'Tạo Lịch Trình';
		$this->curentPage = "Plan";
		
		$data['list_tour'] = $this->mAdmin->getListTour();
		
		if (isset($_POST['Create_LT'])) {
			$ma_tour = trim($this->input->post('tour_lt',true));
			$number_date = trim($this->input->post('number_date',true));
			
			for ($i=0; $i<$number_date; $i++) {
				$date = trim($this->input->post('date_'.$i,true));
				$date= date('Y-m-d', strtotime(str_replace('/', '-', $date)));
				$time = $this->input->post('time_date_'.$i.'[]',true);
				$dia_diem = $this->input->post('dd_date_'.$i.'[]',true);
				for ($j = 0; $j < count($time); $j++) {
					$lt_id = $this->mAdmin->createLicTrinh($time[$j], $dia_diem[$j], $ma_tour, $date);
				}
			}
			
			redirect('admin/lichtrinh');
		}
		
		$this->loadView('lichtrinh/lichtrinh_create', $data);
	}
	
	public function lichtrinh_edit($id) {
		$this->pageTitle = 'Chỉnh Sửa Lịch Trình';
		$this->curentPage = "Plan";
		
		$lictrinh = $this->mAdmin->getLT($id);
		
		$data['lictrinh'] = $lictrinh[0];
		
		if (isset($_POST['Edit_LT'])) {
			$time = trim($this->input->post('thoi_gian', true));
			$dd = trim($this->input->post('dd_lt',true));
			
			$this->mAdmin->updateLichTrinh($id, $time, $dd);
			
			redirect('admin/lichtrinh');
		}
		
		$this->loadView('lichtrinh/lichtrinh_edit', $data);
	}
	
	public function lichtrinh_remove() {
		$lt_id = trim($this->input->post('ltID',true));
		
		$this->mAdmin->deleteLichTrinhID($lt_id);
		
		$response = array();
		$response['success'] = 1;
		
		echo json_encode($response);
	}
}