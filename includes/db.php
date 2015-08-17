<?php 
$host = '127.0.0.1';
$user = 'root';
$password = '';
$db_name = 'blogs';
mysql_connect($host, $user, $password, $db_name) or die ('khong the ket noi toi csdl');
mysql_select_db($db_name);
mysql_set_charset('utf8');

function esc($text){
	return mysql_real_escape_string($text);
}

function db_get_all($sql){
	$result = mysql_query($sql);
	$data = array();

	if ($result){
		while ($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
	}

	return $data;
}

function db_insert($table, $data) {
	$field = array_keys($data);
	$e_data = array_map('mysql_real_escape_string', $data);
	
	$sql = "insert into `{$table}` (`" . implode('`, `', $field) . "`) values ('" . implode("', '", $e_data) . "')";
	
	/*var_dump($sql);die;*/
	mysql_query($sql);
	

	$inserted_id = mysql_insert_id();
	return $inserted_id;
}
function db_update($table, $data, $where){
	$fields = array_keys($data);
	$e_data = array_map ('mysql_real_escape_string', $data);
	$sets = array();

	foreach ($fields as $field ){
		$sets[] = "{$field} = '{$e_data[$field]}'";

	}

	$sql = "update `{$table}` set " . implode(", ", $sets) . " where {$where}";

	/*var_dump($sql);die;*/
	mysql_query($sql);

	return mysql_affected_rows();
}
function db_delete ($table, $where){
	$sql = "delete from `{$table}` where {$where}";
	mysql_query($sql);

	return mysql_affected_rows();
}
?>