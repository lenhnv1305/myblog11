<?php 


class Giohang extends Model {

	// mua hang
	public $table = 'giohang';
	public $primary = 'id_giohang';

	public function getBillByBillId($user_id){
		$sql = "select * from `{$this->table}`
			where `id_giohang` = '" . intval($user_id) . "'";

		/*echo $sql;die;*/
		return db_get_all($sql);
	}
	public function getSPNguoi_Ngay($ngay){

		$sql = "SELECT * FROM `{$this->table}` INNER JOIN `sanpham` on `giohang`.`sp_id` = `sanpham`.`id_sp` WHERE 
		`giohang`.Ngay ='" . $ngay . "' and `giohang`.`Thanhtoan` = '0' "; 

		return db_get_all($sql);
	}
	public function getAllBill(){
		$sql = "select * from `{$this->table}`";

		return db_get_all($sql);
	}
	public function addBill ($data){
		// var_dump($data);die();
		
		 return db_insert($this->table, $data);	
		
	}
	public function updateThanhToan($id_giohang, $val){
		$data = array();
		$data['id_giohang'] = $id_giohang;
		$data['ThanhToan'] = $val;

		return db_update($this->table, $data, " id_giohang = '" . $id_giohang . "'");
	}
	public function getDonHangUser($user_id, $ngay){
		$sql = "SELECT * FROM `{$this->table}` INNER JOIN `sanpham` on `giohang`.`sp_id` = `sanpham`.`id_sp` WHERE 
		`giohang`.Ngay ='" . $ngay . "' and `giohang`.`Thanhtoan` = '1' and `giohang`.`user_id` = '".intval($user_id)."'"; 

		return db_get_all($sql);
	}
}

?>