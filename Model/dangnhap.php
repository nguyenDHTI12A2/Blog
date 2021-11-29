<?php 

/**
 * 
 */
require 'Database.php';
class DangNhap extends Database
{
	protected $db;
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}
	public function logup($username, $password)
	{
		$sql = "insert into tbl_users(userName,passWord,level) values('$username', '$password', '0') ";
		$result = $this->db->conn->query($sql);
		//echo("hi");
		return $result;
	}
	public function login($username, $password)
	{
		$sql = "select userName, password, level from tbl_users where userName ='$username' and password = '$password'";
		$result = $this->db->conn->query($sql);
		//echo("hi");
		return $result;
	}
	public function logout(){
		session_start(); 
		session_destroy();
		session_start();
		$_SESSION['test'] = null;
		header("Location: ../../view/client/index.php");

		exit();
	}
}

 ?>
