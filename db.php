<?php
	function query($sql){
		//ket noi server
		$conn=mysqli_connect("mysql5045.site4now.net","a79e2b_haosiro","hongnga24092000@") or die("lỗi kết nối");
		mysqli_select_db($conn,"db_a79e2b_haosiro") or die("lỗi csdl");
		//thuc hiện truy vấn
		$result=mysqli_query($conn,$sql) or die("lỗi truy vấn");
		//đóng kết nối
		mysqli_close($conn);
		return $result;
	}
?>