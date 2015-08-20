<?php 
class Nguoidung extends Model{
	public $table = 'nguoidung';
	public $primary_key = 'id';

	public function authLogin ($postData){

		$user = static::getOneBy($postData['email'], 'Email');


		if ($user && $user['MatKhau'] == md5($postData['password'])){
			unset($user['MatKhau']);
			$_SESSION ['Logged'] = $user;
			return $user;
		}

		return false;
	}
	public function authRegister ($postData){

		$user = static::getOneBy($postData['email'], 'Email');
		
		if ($user) {
			return false;
		} else {

			$data['MatKhau'] = md5 ($postData['password']);
			$data['Email'] = $postData['email'];
			$data['Ten'] = $postData['name'];
			//var_dump($data);die;
			$user_id = db_insert ($this->table, $data);
			unset ($data['MatKhau']);
			$data['id'] = $user_id;
			$_SESSION['Logged'] = $data;
			return true;

		}
	}
	public function authLogout(){
		
		unset ($_SESSION['Logged']);
		session_destroy();
	}
}
?>