<?php 
class Binhluan extends Model{
	public $table = 'binhluan';
	public $primary = 'id';

	public function getCommentsByBlogId($user_id){
		$sql = "select * from `{$this->table}`
			where `blog_id` = '" . intval($user_id) . "'";

		/*echo $sql;die;*/
		return db_get_all($sql);
	}
	public function getCommentsByCommentId($blogid){
		$sql = "select * from `{$this->table}` where `id` = '". intval($blogid)."'";
		
		return db_get_all($sql);
	}
	public function getAllComment(){
		$sql = "select * from `{$this->table}`";

		return db_get_all($sql);
	}
	public function addComment ($postData, $blog_id){
		$postData['Ngay'] = date("Y-m-d");
		$postData['blog_id'] = $blog_id;
		unset($postData['BlogId']);
		return db_insert($this->table, $postData);
	}
	
	
} 

?>