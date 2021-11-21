<?php 
	
	include('../Database/DB_connection.php');

	if(isset($_POST['change'])){

		$code = $_POST['code'];
		$password = $_POST['newpassword'];

		$sql = "SELECT * FROM user WHERE code = '$code'";

		$result = mysqli_query($connect_db, $sql);

		$data = mysqli_num_rows($result);

		if($data > 0){

			$userData = mysqli_fetch_assoc($result);

			$userId = $userData['user_id'];
			$newCode = 0;

		   	$password_hash = password_hash($password, PASSWORD_BCRYPT);

		   	$sql2 = "UPDATE user SET password = '$password_hash', code = '$newCode' WHERE user_id = '$userId'";

		   	if(mysqli_query($connect_db, $sql2)){
		   		echo "The Password Successfully Reset";
		   	}
		   	else{
		   		echo "You have an Error" . mysqli_error();
		   	}





		}
		else{
			echo "Error";
		}				

		

	}





 ?>