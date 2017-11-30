<?php
    session_start();
?>

<html>
    <head>
        <style>
            body {
            background-color: #091721;
            }
            input[type=text],input[type = number],input[type =file], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                background-color: white;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div {
                font-family: "Trebuchet MS";
                position: relative;
                width: 40%;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                top:60px; left:400px;
            }
            </style>

    </head>
    <title>
        Item Form
    </title>
    <body>
        <div>
        <form id = "tblitem" action="..\php\insertItem.php" method="post" enctype="multipart/form-data">
            <h1 align="center">Item Form</h1>
            <label for="Img">Image</label>
            <input type="file" id="img" name="img">
            <label for="name">Item Name</label>
            <input type="text" id="nme" name="name" placeholder="Item Name">
            <label for="code">Item Code</label>
            <input type="text" id="code" name="code" placeholder="Item Code">
            <label for="desc">Item Decription</label>
            <input type="text" id="desc" name="description" placeholder="Description">
            <label for="supp">Supplier</label>
            <input type="text" id="supp" name="supplier" placeholder="Supplier">
            <label for="brnd">Brand / Model</label>
            <input type="text" id="brnd" name="brand" placeholder="Brand"> 
            <label for="prc">Price</label>
            <input type="number" id="prc" name="price" placeholder="0000.00">
            <label for="war">Warranty</label>
            <input type="text" id="war" name="warranty" placeholder="Warranty">
            <input type="submit" Value="Submit" id = "btnsubmit">
        </form>
        </div>
    </body>
</html>