<?php
class Admin_model extends CI_Model {
	function __construct() {
		// Call the Model constructor
		parent::__construct();
	}
	
	function saveTour($gia, $maXe, $ngaydi, $ngayve, $ddDi, $ddDen, $link) {
		$data = array(
				'Key_media' => $link,
				'Uploaded_DateTime' => date('Y-m-d H:i:s'),
				'Type'  => strtolower($type),
				'Size'  => $size
		);
		
		$this->db->insert('tour', $data);
		return $this->db->insert_id();
	}
	
	// Địa điểm
	function saveDD($diaChi, $moTa, $maTinh) {
		$data = array(
				'DIA_CHI' => $diaChi,
				'MO_TA' => $moTa,
				'MA_TINH'  => $maTinh
		);
		
		$this->db->insert('dia_diem', $data);
		return $this->db->insert_id();
	}
	
	function editDD($maDD, $diaChi, $moTa, $maTinh) {
		$data = array(
				'DIA_CHI' => $diaChi,
				'MO_TA' => $moTa,
				'MA_TINH'  => $maTinh
		);
		
		$this->db->where('MA_DD', $maDD);
		$this->db->update('dia_diem', $data);
	}
	
	function deleteDD($maDD) {
		$this->db->where('MA_DD', $maDD);
		$this->db->delete('dia_diem');
	}
	
	function getListDD() {
		$this->db->select('*');
		$this->db->from('dia_diem');
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function getDD($id) {
		$this->db->select('*');
		$this->db->from('dia_diem');
		$this->db->where('MA_DD', $id);
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	// Xe
	
	function checkMaXe($maXe) {
		$this->db->select('MA_XE');
		$this->db->from('xe');
		$this->db->where('MA_XE', $maXe);
		
		$query = $this->db->get();
		
		$xe = $query->result();
		
		if (count($xe) > 0) {
			return true;
		}
		
		return false;
	}
	
	function saveXe($maXe, $loaixe, $mauxe, $socho, $ngaybtri, $taixe) {
		$data = array(
				'MA_XE' => $maXe,
				'LOAI_XE' => $loaixe,
				'MAU_XE' => $mauxe,
				'SO_CHO'  => $socho,
				'NGAY_BTRI' => $ngaybtri,
				'TAI_XE' => $taixe
		);
		
		$this->db->insert('xe', $data);
		return $this->db->insert_id();
	}
	
	function editXe($maXe, $loaixe, $mauxe, $socho, $ngaybtri, $taixe) {
		$data = array(
				'LOAI_XE' => $loaixe,
				'MAU_XE' => $mauxe,
				'SO_CHO'  => $socho,
				'NGAY_BTRI' => $ngaybtri,
				'TAI_XE' => $taixe
		);
		
		$this->db->where('MA_XE', $maXe);
		$this->db->update('xe', $data);
	}
	
	function deleteXe($maXe) {
		$this->db->where('MA_XE', $maXe);
		$this->db->delete('xe');
	}
	
	function getListXe() {
		$this->db->select('*');
		$this->db->from('xe');
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function getXe($id) {
		$this->db->select('*');
		$this->db->from('xe');
		$this->db->where('MA_XE', $id);
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	// Khách Hàng
	function saveKH($ho_ten_kh, $cmnd, $sdt, $email) {
		$data = array(
				'HO_TEN_KH' => $ho_ten_kh,
				'CMND' => $cmnd,
				'SDT'  => $sdt,
				'Email'=> $email
		);
		
		$this->db->insert('khach_hang', $data);
		return $this->db->insert_id();
	}
	
	function editKH($maKH, $ho_ten_kh, $cmnd, $sdt, $email) {
		$data = array(
				'HO_TEN_KH' => $ho_ten_kh,
				'CMND' => $cmnd,
				'SDT'  => $sdt,
				'Email'=> $email
		);
		
		$this->db->where('MA_KH', $maKH);
		$this->db->update('khach_hang', $data);
	}
	
	function deleteKH($maKH) {
		$this->db->where('MA_KH', $maKH);
		$this->db->delete('khach_hang');
	}
	
	function getListKH() {
		$this->db->select('*');
		$this->db->from('khach_hang');
		$query = $this->db->get();
		
		return $query->result();
	}
	function getKH($id) {
		$this->db->select('*');
		$this->db->from('khach_hang');
		$this->db->where('MA_KH', $id);
		$query = $this->db->get();
		
		return $query->result();
	}

	// tour
	function insertTour($name_tour,$address_from, $address_to, $date_from, $date_to, $price, $car_number, $linkImage) {
		$data = array(
				'GIA_TOUR' => $price,
				'MA_XE' => $car_number,
				'NGAY_DI'  => $date_from,
				'NGAY_VE' => $date_to,
				'TEN_TOUR' => $name_tour,
				'DD_DI'=> $address_from,
				'DD_DEN' => $address_to,
				'Cover' => $linkImage
		);
		
		$this->db->insert('tour', $data);
		return $this->db->insert_id();
	}
	
	function updateTour($ma_tour,$name_tour,$address_from, $address_to, $date_from, $date_to, $price, $car_number, $linkImage) {
		$data = array(
				'GIA_TOUR' => $price,
				'MA_XE' => $car_number,
				'NGAY_DI'  => $date_from,
				'NGAY_VE' => $date_to,
				'TEN_TOUR' => $name_tour,
				'DD_DI'=> $address_from,
				'DD_DEN' => $address_to,
				'Cover' => $linkImage
		);
		
		$this->db->where('MA_TOUR', $ma_tour);
		$this->db->update('tour', $data);
	}
	
	function deleteTour($tourId) {
		$this->db->where('MA_TOUR', $tourId);
		$this->db->delete('tour');
	}
	
	function getListTour() {
		$query = "SELECT *, (SELECT dia_diem.DIA_CHI FROM dia_diem WHERE dia_diem.MA_DD = tour.DD_DI) as ddDi_title, 
					(SELECT dia_diem.DIA_CHI FROM dia_diem WHERE dia_diem.MA_DD = tour.DD_DEN) as ddDen_title
					FROM tour";
		
		return $this->db->query($query)->result();
	}
	
	function getTour($tourID) {
		$query = "SELECT *, (SELECT dia_diem.DIA_CHI FROM dia_diem WHERE dia_diem.MA_DD = tour.DD_DI) as ddDi_title,
					(SELECT dia_diem.DIA_CHI FROM dia_diem WHERE dia_diem.MA_DD = tour.DD_DEN) as ddDen_title
					FROM tour
					WHERE tour.MA_TOUR = $tourID";
		
		return $this->db->query($query)->result();
	}
	
	// đặt tour
	
	function createDatTour($maKH, $maTour, $soLuong, $ghiChu) {
		$data = array(
				'MA_KH' => $maKH,
				'MA_TOUR' => $maTour,
				'SL_DAT'  => $soLuong,
				'GHI_CHU' => $ghiChu
		);
		
		$this->db->insert('dat_tour', $data);
		return $this->db->insert_id();
	}
	
	function editDatTour($id, $maKH, $maTour, $soLuong, $ghiChu) {
		$data = array(
				'MA_KH' => $maKH,
				'MA_TOUR' => $maTour,
				'SL_DAT'  => $soLuong,
				'GHI_CHU' => $ghiChu
		);
		
		$this->db->where('MA_DATTOUR', $id);
		$this->db->update('dat_tour', $data);
	}
	
	function deleteDatTour($tourId) {
		$this->db->where('MA_TOUR', $tourId);
		$this->db->delete('dat_tour');
	}
	
	function deleteDatTourKH($khID) {
		$this->db->where('MA_KH', $khID);
		$this->db->delete('dat_tour');
	}
	
	function deleteDatTourID($dtID) {
		$this->db->where('MA_DATTOUR', $dtID);
		$this->db->delete('dat_tour');
	}
	
	function getListDT() {
		$this->db->select('*');
		$this->db->from('dat_tour');
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function getDT($dtID) {
		$this->db->select('*');
		$this->db->from('dat_tour');
		$this->db->where('MA_DATTOUR', $dtID);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	// lịch trình
	
	function createLicTrinh($time, $dd, $ma_tour, $day) {
		$data = array(
				'THOI_GIAN' => $time,
				'DD_DULICH' => $dd,
				'MA_TOUR'  => $ma_tour,
				'DAY' => $day
		);
		
		$this->db->insert('lich_trinh', $data);
		return $this->db->insert_id();
	}
	
	function updateLichTrinh($ltID, $time, $dd) {
		$data = array(
				'THOI_GIAN' => $time,
				'DD_DULICH' => $dd
		);
		
		$this->db->where('MA_LICHTRINH', $ltID);
		$this->db->update('lich_trinh', $data);
	}
	
	function deleteLichTrinh($tourId) {
		$this->db->where('MA_TOUR', $tourId);
		$this->db->delete('lich_trinh');
	}
	
	function deleteLichTrinhID($ltID) {
		$this->db->where('MA_LICHTRINH', $ltID);
		$this->db->delete('lich_trinh');
	}
	
	function getListLT() {
		$this->db->select('*');
		$this->db->from('lich_trinh');
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function getLT($id) {
		$this->db->select('*');
		$this->db->from('lich_trinh');
		$this->db->where('MA_LICHTRINH', $id);
		$query = $this->db->get();
		
		return $query->result();
	}
	
}