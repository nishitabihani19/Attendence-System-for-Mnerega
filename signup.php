<?php 
	if($_POST['submit']){
	include 'dbconnect.php';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];

	$sql="insert into user (`name`,`email`,password)values('$name','$email','$pass')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "<script>window.location.assign('../index.php')</script>";
	}
}
else{
	echo "<script>window.location.assign('../index.php')</script>";
}

 ?>