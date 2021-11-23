<?php

class AddCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');  // impprt file  category.php vào trong file này
		$categoryModel = new CategoryModel(); // khởi tạo class
		$name = $slug = NULL;
		$alert = array();

		if (isset($_POST['addCategory'])) {
			$name = $_POST['name'];
			$slug = changeTitle($name);

			if ($name) {
				$categoryModel->addCategory($name, $slug);
				$alert['success'] = 'Thêm thành công';
			}
		}

		require('pages/category/add.php');
	}
}
?>