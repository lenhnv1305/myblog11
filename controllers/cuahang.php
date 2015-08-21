<?php 
function cuahang_home(){
	$data = array();
	$data['dienthoai'] = model('sanpham')->getAllProduct();
	/*$user = isLogged();
	if ($user)*/
	$data['template_file'] = 'cuahang/home.php';
	render('Layout2.php', $data);
}
function cuahang_chovaogio(){
	$postData = postData();
	$dienthoai = new GioHang();
	
	/*var_dump($postData);die;*/
	$i = 0;

	//khi sản phẩm đã có sẵn trong gio hàng thì cộng thêm vào
	foreach ($_SESSION['GioHang'] as $key => $mang){
		if ($mang->getID_SP() == $postData['id_sp']){
			// die();
			$_SESSION['GioHang'][$key]->themCungMotSP();

			$i = 1;
		}
	}

	if ($i == 0){
		$dienthoai->themMoiMotSP($postData['id_sp'], $postData['TenSP'],$postData['Gia'], $postData['HinhAnh'], 1 );
		// var_dump($_SESSION['GioHang']);die;
		// var_dump($dienthoai);die;	

		$_SESSION['GioHang'][] = $dienthoai;
		
	}

	/*var_dump($_SESSION['GioHang']);die;*/
	$data = array();
	$data['template_file'] = 'cuahang/giohang.php';
	render('Layout2.php', $data); 
}
function cuahang_updateSoLuong(){
	$postData = postData();

	$keyArray = array();

	$i = 0;

	foreach ($postData as $key => $value){
		if ($i == 0){
			$keyArray[0] = $key;
			$i = 1;
		}else {
			$keyArray[1] = $key;
		}
	}

	// var_dump($keyArray);die();
	foreach ($_SESSION['GioHang'] as $key => $mang){
		if ($mang->getID_SP() == $postData[$keyArray[1]]){

			$_SESSION['GioHang'][$key]->updateSoLuong($postData[$keyArray[0]]);

		}
	}

	$data = array();
	$data['template_file'] = 'cuahang/giohang.php';
	render('Layout2.php', $data); 
}
function cuahang_xemgiohang(){
	$data = array();

	$data['template_file'] = "cuahang/giohang.php";

	render("Layout2.php", $data);
}
function cuahang_xoasp(){
	$postData = postData();
	$nameID_SP = key($postData);
	// var_dump($nameID_SP);die();
	foreach ($_SESSION['GioHang'] as $key => $value){
		if ($value->getID_SP() == $postData[$nameID_SP]){
			unset($_SESSION['GioHang'][$key]);
			redirect("index.php?c=cuahang&m=xemgiohang");
		}
	}
}
?>