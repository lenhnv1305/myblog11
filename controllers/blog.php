<?php


function blog_list(){
	$data = array();

	$currentUser = isLogged();

	$data['blogs'] = model('baiviet')->getArticleByUserId($currentUser['id']);

	/*var_dump($data);die;*/
	$data['template_file'] = 'blog/list.php';
	render('Layout.php', $data);
}
function blog_them(){
	$data = array();

	if (isPostRequest()){
		$currentUser = isLogged();
		$postData = postData();
		if (model('baiviet')->addBaiViet($postData, $currentUser['id'])){
			redirect('/index.php?c=homepage&m=home');
		}
	}
	$data['template_file'] ='blog/them.php';
	render('Layout.php', $data);
	
}
function blog_xoa(){

	$data = array();

	$blog_id = $_POST['formBlogId'];
	//var_dump($blog_id);die();

	model('baiviet')-> deleteOne(" id = '" .$blog_id) ."'";

	blog_list();

}

function blog_sua(){

	$data = array();

	$data['blogidu'] = postData();

	$data['oneblog'] = model('baiviet')->getArticleByBlogId($data['blogidu']['formBlogId']);
	/*var_dump($blogidu['formBlogId']);die;*/

	$data['template_file'] = 'blog/sua.php';
	render('Layout.php', $data);

}
function blog_sua_submit(){

	$data = array();
	

	/*var_dump($postData);die;*/
	if (isPostRequest()){
		$currentUser = isLogged();
		$postData = postData();

		/*var_dump($postData);die;*/
		if (model('baiviet')->updateBaiViet($postData, $currentUser['id'])){
			redirect('/index.php?c=blog&m=list');
		}
		
	}
}

function blog_xemchitiet(){
	$data = array();

	if (isPostRequest()){
		$data['blogs'] = model('baiviet')->getArticleByBlogId($_POST['IdBaiViet']);
		/*var_dump($data);die;*/
	}

	$data['template_file'] = 'blog/xemchitiet.php';
	render('Layout.php', $data);
}

function blog_xemchitiet2($blogId){
	$data = array();

	
	$data['blogs'] = model('baiviet')->getArticleByBlogId($blogId);

	$data['template_file'] = 'blog/xemchitiet.php';
	render('Layout.php', $data);
}
function blog_binhluan(){
	

	if (isPostRequest()){
		$postData = postData();
		/*$data = array(
			'Name'=>$postData,
		);*/
		/*var_dump($postData);die();*/
		$blogId = $postData['BlogId'];
		if (model('binhluan')->addComment($postData ,$postData['BlogId'])){
			blog_xemchitiet2($blogId);
		}
	}

}


?>