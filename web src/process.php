<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$Uname 		= $_POST['Uname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$Pass 		= ($_POST['Pass']);

		$sql = "INSERT INTO users (Uname, email, phonenumber, Pass ) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$Uname, $email, $phonenumber, $Pass]);
		if($result){
			echo 'Successfully Registered.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}