<?php 
class Sanpham extends Model{
	public $table = 'sanpham';
	public $primary = 'id_sp';

	
	public function getProductByProductId($sp_id){
		$sql = "select * from `{$this->table}` where `id_sp` = '". intval($sp_id)."'";
		
		return db_get_all($sql);
	}
	public function getAllProduct(){
		$sql = "select * from `{$this->table}`";

		return db_get_all($sql);
	}
	public function addProduct ($postData){
		

		return db_insert($this->table, $postData);
	}
	public function updateProduct($postData){

		//unset($postData['id']);
		/*var_dump($postData);die;*/
		return db_update($this->table, $postData, " id_sp = " . $postData['id_sp']);
	}
	
} 

?>