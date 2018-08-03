<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_KhachHang extends MY_Controller {
	public function khachhang() {
		$this->pageTitle = 'Khách Hàng';
		$this->curentPage = "Client";
		
		$data['listKH'] = $this->mAdmin->getListKH();
		
		$this->loadView('khachhang/khachhang', $data);
	}
	
	public function khachhang_create() {
		$this->pageTitle = 'Tạo Khách Hàng';
		$this->curentPage = "Client";
		
		if (isset($_POST["Create_KhachHang"])) {
			$ho_ten_kh = trim($this->input->post('ho_ten_kh',true));
			$cmnd = trim($this->input->post('cmnd', true));
            $sdt = trim($this->input->post('sdt', true));
            $email = trim($this->input->post('email', true));
			
			$this->mAdmin->saveKH($ho_ten_kh, $cmnd, $sdt, $email);
			
			redirect('admin/khachhang');
		}
		
		$this->loadView('khachhang/khachhang_create');
	}
	
	public function khachhang_edit($id) {
		$this->pageTitle = 'Sửa Thông Tin Khách Hàng';
		$this->curentPage = "Client";
		
		if (isset($_POST["Edit_KhachHang"])) {
			$ho_ten_kh = trim($this->input->post('ho_ten_kh',true));
			$cmnd = trim($this->input->post('cmnd', true));
            $sdt = trim($this->input->post('sdt', true));
            $email = trim($this->input->post('email', true));
			
			$this->mAdmin->editKH($id, $ho_ten_kh, $cmnd, $sdt, $email);
			
			redirect('admin/khachhang');
		}
		
		$khach_hang =  $this->mAdmin->getKH($id);
		
		$data['khach_hang'] = $khach_hang[0];
		
		$this->loadView('khachhang/khachhang_edit', $data);
	}
	
	public function khachhang_remove() {
		$kh_id = trim($this->input->post('khId',true));
		
		$this->mAdmin->deleteDatTourKH($kh_id);
		$this->mAdmin->deleteKH($kh_id);
		
		$response = array();
		$response['success'] = 1;
		
		echo json_encode($response);
	}
}