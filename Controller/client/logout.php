<?php

class Logout {
	public function __construct()
	{
		unset($_SESSION['user']); // xóa session user đã tạo khi đăng nhập
		session_destroy();
		header('Location: ../../../../View/client/pages/home.php'); // chuyển hướng về trang chủ	
	}
}
$logout = new Logout();
?>