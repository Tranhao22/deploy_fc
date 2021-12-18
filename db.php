<?php
	function query($sql){
		//ket noi server
		$conn=mysqli_connect("mysql5037.site4now.net","a7c75f_haoit22","Admin1234") or die("lỗi kết nối");
		mysqli_select_db($conn,"db_a7c75f_haoit22") or die("lỗi csdl");
		//thuc hiện truy vấn
		$result=mysqli_query($conn,$sql) or die("lỗi truy vấn");
		//đóng kết nối
		mysqli_close($conn);
		return $result;
	}
?>
