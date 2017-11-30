<?php
	session_start();
	include 'connect.php';

	if(!$connect){
		echo "Error: " . mysqli_connect_error();
		exit();
    }

    $contractorName = $_POST['contractorName'];
    $contractorPhone  = $_POST['contractorPhone'];
    $contractorEmail  = $_POST['contractorEmail'];
    $companyName  = $_POST['companyName'];
    $ownerName  = $_POST['ownerName'];
    $address  = $_POST['address'];
    $companyPhone  = $_POST['companyPhone'];
    $companyEmail  = $_POST['companyEmail'];
    $itemName  = $_POST['itemName'];
    $spec  = $_POST['spec'];
    $warranty  = $_POST['warranty'];
    $price  = $_POST['price'];
    $expDate  = $_POST['expDate'];
        
    if( $contractorName == "" ||
        $contractorPhone == "" ||
        $contractorEmail == "" ||
        $companyName  == "" ||
        $ownerName == "" ||
        $address == "" ||
        $companyPhone == "" ||
        $companyEmail == "" ||
        $itemName == "" ||
        $spec == "" ||
        $warranty == "" ||
        $price == "" ||
        $expDate == ""){
            echo '<script language="javascript">';
            echo "alert(\"Please fill all the required fields!\")";
            echo '</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../Forms/Supplier-Contract-Form.php">';
            exit();
    }else{
        $sql = "INSERT INTO `contract`(`contractorName`, `contractorPhone`, `contractorEmail`, `companyName`, `ownerName`, `address`, `companyPhone`, `companyEmail`, `itemName`, `spec`, `warranty`, `price`, `expDate`)
        VALUES ('$contractorName', '$contractorPhone', '$contractorEmail', '$companyName', '$ownerName', '$address', '$companyPhone', '$companyEmail', '$itemName', '$spec', '$warranty', '$price', '$expDate');";
        mysqli_query($connect, $sql);
        mysqli_close($connect);

        echo '<script language="javascript">';
        echo 'alert("Successful!")';
        echo '</script>';
        echo '<META HTTP-EQUIV="Refresh" Content="0.001; URL=../signIn.html">';
        exit();
    }
?>