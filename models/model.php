<?php
	require ROOT . DS . 'includes' . DS . 'db.php';

	class Model {
		public $table = '';
		public $primary_key = '';

		public function all (){
			$sql = "select * from `{$this->table}`";

			return db_get_all($sql);
		}

		public function getOneBy($value, $field = null){
			if ($field === null){
				$field = $this->primary_key;
			}

			$sql = "select * from `{$this->table}` where `{$field}` = '" . esc($value) ."'limit 1";
			$rows = db_get_all($sql);

			return isset($rows[0]) ? $rows[0] : false;
		}

		public function deleteOne($model_id){
			
			return db_delete($this->table, $model_id);
		}
	}
?>