<?php 
function cuahang_home(){
	$data = array();
	$data['dienthoai'] = model('sanpham')->getAllProduct();
	$data['template_file'] = 'cuahang/home.php';
	render('Layout2.php', $data);
}
?>