<?php 
class Baiviet extends Model{
	public $table = 'baiviet';
	public $primary = 'id';

	public function getArticleByUserId($user_id){
		$sql = "select * from `{$this->table}`
			where `user_id` = '" . intval($user_id) . "'";

		/*echo $sql;die;*/
		return db_get_all($sql);
	}
	public function getArticleByBlogId($blogid){
		$sql = "select * from `{$this->table}` where `id` = '". intval($blogid)."'";
		
		return db_get_all($sql);
	}
	public function getAllArticle(){
		$sql = "select * from `{$this->table}`";

		return db_get_all($sql);
	}
	public function addBaiViet ($postData, $user_id){
		$postData['NgayDang'] = date("Y-m-d");
		$postData['user_id'] = $user_id;

		return db_insert($this->table, $postData);
	}
	public function updateBaiViet($postData, $user_id){
		$postData['NgayDang'] = date("Y-m-d");
		$postData['user_id'] = $user_id;
		//unset($postData['id']);
		return db_update($this->table, $postData, " id = " . $postData['id']);
	}
	
} 

?>