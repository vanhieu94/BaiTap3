<?php 
	function checkmail($email)
	{
		$flag=false;
		$pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
		return preg_match($pattern, $email)
	}
	if(!$_POST["email"])
	{
		echo "Vui lòng nhập email để kiểm tra!!!";
	}
	else
	{
		$email=$_POST["email"];//Lây email người dùng nhập vào.
		if(checkmail($email)==true)
		{
			echo "Đẩy là email hợp lệ.";
		}
		else
		{
			echo "Email không hợp lệ.";
		}
	}
	echo"<a href='index.php'>Về lại trang trước</a>";
?>