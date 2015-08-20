<?php 
function admin_home(){
	$data = array();

	$user = isLogged();

	if ($user['role'] != '1'){
		redirect('index.php?c=homepage&m=home');
	}else{
		$data['dienthoai'] = model('sanpham')->getAllProduct();
		$data['template_file'] = 'admin/home.php';
		render('Layout3.php', $data);
	}
}
function admin_themsp(){

	$data = array();

	if (isPostRequest()){
		

		$currentUser = isLogged();
		$postData = postData();
		
		$id_sp = model('sanpham')->addProduct($postData);

		if ($id_sp){
			//Them string duong dan cua hinh hanh do trong web server
			$tenHinh = uploadFile();
			
			$dtSanPham = model('sanpham')->getProductByProductId($id_sp);

			$dtSanPham[0]['HinhAnh'] = $tenHinh;

			/*var_dump($dtSanPham);die;*/
			model('sanpham')->updateProduct($dtSanPham[0]);
			/*var_dump($tenHinh);die;*/
			//chuyen ve trang admin home
			redirect('/index.php?c=admin&m=home');
		}
	}
	$data['template_file'] ='admin/themsp.php';
	render('Layout3.php', $data);
}
function admin_suasp(){
	$data = array();

	$data['newphone'] = postData();

	$data['dienthoai'] = model('sanpham')->getProductByProductId($data['newphone']['id_sp']);


	if (isPostRequest() && isset($data['newphone']['TenSP'])){
		$currentUser = isLogged();
		$tenHinh = uploadFile();
		$data['newphone']['HinhAnh'] = $tenHinh;
		
		if (model('sanpham')->updateProduct($data['newphone'])){
			/*var_dump($data['newphone']);die;*/
			redirect('/index.php?c=admin&m=home');
		}
		
	}

	$data['template_file'] = 'admin/suasp.php';
	render('Layout3.php', $data);
}

function admin_xoasp(){
	$data = array();

	$id_sp = $_POST['id_sp'];
	/*var_dump($id_sp);die();*/

	model('sanpham')-> deleteOne(" id_sp = '" .$id_sp."'");

	admin_home();
}
function uploadFile(){

	$target_dir = 'views' . DS ."hinhanh" . DS;
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	 // Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        /*var_dump($target_file);die;*/
	        return $target_file;
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	return "";
}
?>