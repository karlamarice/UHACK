<?php
	session_start();
	include 'connect.php';

	if(!$connect){
		echo "Error: " . mysqli_connect_error();
		exit();
    }

    $img = $_POST['img'];
	$code = $_POST['code'];
    $name  = $_POST['name'];
    $description = $_POST['description'];
    $supplier  = $_POST['supplier'];
    $brand  = $_POST['brand'];
    $price  = $_POST['price'];
    $warranty  = $_POST['warranty'];
        
    if( $img == "" ||
	    $code == "" ||
        $name  == "" ||
        $description == "" ||
        $supplier  == "" ||
        $brand  == "" ||
        $price  == "" ||
        $warranty == ""){
            echo '<script language="javascript">';
            echo "alert(\"Please fill all the required fields! $code, $contractorName, $contractorPhone, $contractorEmail, $companyName, $ownerName, $address, $companyPhone, $companyEmail, $itemName, $spec, $warranty, $price\")";
            echo '</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../Forms/Item-Form.php">';
            exit();
    }else{
        $sql = "INSERT INTO `items` (`img`, `code`, `name`, `description`, `supplier`, `brand`, `warranty`, `price`) 
        VALUES ('$img', '$code', '$name', '$description', '$supplier', '$brand', '$warranty', '$price') ;";
        mysqli_query($connect, $sql);
        mysqli_close($connect);

        echo '<script language="javascript">';
        echo 'alert("Successful!")';
        echo '</script>';
        echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=view.php">';
        exit();
    }
		
?>