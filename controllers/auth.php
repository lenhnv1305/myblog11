<?php

function auth_login() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        $user = model('nguoidung')->authLogin($postData);
        if ($user) {
            if ($user['role'] == '1'){
                $_SESSION['Logged'] = $user;
                $_SESSION['GioHang'] = array();
                redirect('/index.php?c=admin&m=home');
            }
            if($user['role'] == '0'){
                $_SESSION['Logged'] = $user;
                $_SESSION['GioHang'] = array();
            }
            redirect('/index.php?c=homepage&m=home');
        } else {
            $data['error'] = 'Login failed ! Please try again !';
        }
    }
    
    $data['template_file'] = 'auth/login.php';
    render('layout.php', $data);
}
function auth_register(){
    $data = array();
    $data['template_file'] = 'auth/register.php'; 

    if (isPostRequest()){
        $postData = postData();
        /*var_dump($postData);die;*/
        
        if (model('nguoidung')->authRegister($postData)){
            redirect('index.php?c=homepage&m=home');
        } else {
            $data['error'] = 'Register failed ! email exists !! please try again !!';
            $data['postData'] = $postData;
        }
    }

    render('Layout.php', $data);
}
function auth_logout(){
    model('nguoidung')->authLogout();
    redirect('index.php?c=auth&m=login');
}
?>