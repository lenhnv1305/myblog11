<?php 
session_start();

require 'db.php';
require 'models/model.php';

function model ($model){
	static $models = array();
	$model = strtolower($model);
	if (!isset ($models[$model])){
		include ROOT . DS . 'models' . DS . $model . '.php';

		$model_name = ucfirst($model);
		$models[$model] = new $model_name();
	}

	return $models[$model];
}
function isLogged(){
	if (empty($_SESSION['Logged'])){
		return false;
	}

	return $_SESSION['Logged'];
}

function render($file, $data){
	extract($data);
	ob_start();

	include ROOT . DS . 'views' . DS . $file;

	ob_end_flush();
}
function isPostRequest() {
    return (strtolower($_SERVER['REQUEST_METHOD']) == 'post');
}
function postData(){
	return $_POST;
}
function redirect($to_url){
	header('Location: ' . $to_url);
	exit();
}
class GioHang{
	private $id_sp=0;
	private $gia =0;
	private $tenSP="";
	private $soLuong = 0;
	private $hinhAnh = "";
	private $thanhTien;

	public function xoaMotSP(){
		if ($this->soLuong > 0){
			$soLuong--;
		}
	}
	public function themMoiMotSP($id_sp, $tenSP, $gia, $hinhAnh, $soLuong){
		$this->id_sp = $id_sp;
		$this->gia = $gia;
		$this->tenSP = $tenSP;
		$this->hinhAnh = $hinhAnh;
		$this->soLuong = $soLuong;

		$this->thanhTien = $this->gia * $this->soLuong;
	}
	public function updateSoLuong($soLuong){
		$this->soLuong = $soLuong;

		$this->thanhTien = $this->gia * $this->soLuong;
	}
	public function themCungMotSP(){
		$this->soLuong = $this->soLuong + 1;

		$this->thanhTien = $this->gia * $this->soLuong;
	}
	public function getID_SP(){
		return $this->id_sp;
	}
	public function getGia(){
		return $this->gia;
	}
	public function getTenSP(){
		return $this->tenSP;
	}
	public function getSoLuong(){
		return $this->soLuong;
	}
	public function getHinhAnh(){
		return $this->hinhAnh;
	}
	public function getThanhTien(){
		return $this->thanhTien;
	}
}
?>