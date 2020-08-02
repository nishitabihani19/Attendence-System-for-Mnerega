
<?php 

if($_POST['submit']){
	include 'dbconnect.php';

	$email=$_POST['email'];
	$pass=$_POST['password'];

	$sql="select * from user where email='$email' and password='$pass'";
	$result=mysqli_query($conn,$sql);
	if($result){
		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			session_start();
			$_SESSION["status"]=
			$_SESSION["name"]=$row["name"];
			$_SESSION["email"]=$row["email"];
			$_SESSION["id"]=$row["id"];
			$_SESSION["userrole"]=$row["role"];
			if($row["role"]=='2'){
				echo "<script>window.location.assign('../admin.php')</script>";
			}
			elseif ($row["role"]=='1') {
				echo "<script>window.location.assign('../supervisor.php')</script>";
			}
			else{
				echo "<script>window.location.assign('../emp.php')</script>";
			}
		}
		else {
			echo "<script>window.location.assign('../index.php')</script>";
		}
	}
}
else{
	echo "<script>window.location.assign('../index.php')</script>";
}

 ?>