<?php
	session_start();
	include 'connect.php';

	if(!$connect){
		echo "Error: " . mysqli_connect_error();
		exit();
	}

	$code = $_POST['code'];

	if($code){
		$query = mysqli_query($connect, "SELECT * FROM bidInfo WHERE code = '$code'");
		$numrows = mysqli_num_rows($query);

		if($numrows != 0){
			//log in data matching
			while($row = mysqli_fetch_assoc($query)){
				$dbcode = $row['code'];
				$dbitemType = $row['itemType'];
				$dbreqSpec = $row['reqSpec'];
			}
			//check if they match
			if($code == $dbcode){
				$_SESSION['code'] = $dbcode;
				$_SESSION['vendor'] = "true";
				echo '<script language="javascript">';
				echo 'alert("Hello Contractor!")';
				echo '</script>';
				echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../Forms/Supplier-Bidding-Form.php">';
				exit(); 
			}
		}else{
			echo '<script language="javascript">';
			echo 'alert("Code does not exist!")';
			echo '</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../home/Vendor Or Supplier/vendorSupplier.html">';
            exit();            
		}
	}else{
		echo '<script language="javascript">';
		echo 'alert("Please fill all required fields!")';
		echo '</script>';
		echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../home/Vendor Or Supplier/vendorSupplier.html">';
		die();
	}
?>