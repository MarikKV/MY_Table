<?php
	// ���������� ���� ������
	include 'connection_db.php';
	mysqli_set_charset($connection,'utf8');
	//


	//����������� �����
	$date = $_POST['date'];
	$name = $_POST['name'];
	$task = $_POST['task'];
	$Id = $_POST['Id'];

	$insert = mysqli_query($connection, "INSERT INTO `tasks` (`Id`, `name`, `date`, `task`) VALUES ('$Id', '$name', '$date', '$task')");
	if($insert == true){
		echo "All ok! ";
	} else {
		echo "Error";
		mysqli_close($connection);
	}

?>