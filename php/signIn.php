<?php
	session_start();
	include 'connect.php';

	if(!$connect){
		echo "Error: " . mysqli_connect_error();
		exit();
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username && $password){
		$query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
		$numrows = mysqli_num_rows($query);

		if($numrows != 0){
			//log in data matching
			while($row = mysqli_fetch_assoc($query)){
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbname = $row['name'];
				$dbposition = $row['position'];
			}
			//check if they match
			if($username == $dbusername && $password == $dbpassword){
				$_SESSION['username'] = $dbusername;
				$_SESSION['password'] = $dbpassword;
				$_SESSION['name'] = $dbname;
				$_SESSION['position'] = $dbposition;
				$_SESSION['login'] = "true";
				echo '<script language="javascript">';
				echo 'alert("Logged in successfully!")';
				echo '</script>';
				echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../home/', $_SESSION['position'], '/', $_SESSION['position'], '.php">';
				exit(); 
			}else{
				echo '<script language="javascript">';
				echo 'alert("Incorrect Password!")';
				echo '</script>';
				echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../signIn.html">';
				exit();
			}
		}else{
			echo '<script language="javascript">';
			echo 'alert("User does not exist!")';
			echo '</script>';
			echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../signIn.html">';
		}
		exit();
	}else{
		echo '<script language="javascript">';
		echo 'alert("Please fill all required fields!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../signIn.html">';
		die();
	}
?>