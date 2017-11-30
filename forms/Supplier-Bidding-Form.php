<?php
    session_start();
?>

<html>
    <head>
        <style>
           body {
            background-color: #091721;
            }
            input[type=text],input[type = number],input[type =date], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
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
                top:50px; left:400px;
            }
        </style>
    </head>

    <title>
        Supplier Bidding Form
    </title>

    <body>
        <div id="supdiv">
        <form id = "supform" action="..\php\insertBidding.php" method="post">
            <h1 align="center">Supplier Bidding Form</h1>
            <h2 align="center">Contractors Information</h1>
            <label for="cname">Contractor's Name</label>
            <input type="text" id="cname" name="contractorName" placeholder="Contractor">
            <label for="phone">Phone</label>
            <input type="text" id="pno" name="contractorPhone" placeholder="Phone Number">
            <label for="em">Email</label>
            <input type="text" id="em" name="contractorEmail" placeholder="Email">
            <h2 align="center">Company Information</h1>
            <label for="cmname">Company Name</label>
            <input type="text" id="cmname" name="companyName" placeholder="Company">
            <label for="oname">Owner's Name</label>
            <input type="text" id="oname" name="ownerName" placeholder="Owner">
            <label for="add">Address</label>
            <input type="text" id="add" name="address" placeholder="Address">
            <label for="pno1">Phone</label>
            <input type="text" id="pno1" name="companyPhone" placeholder="Phone">
            <label for="em1">Email</label>
            <input type="text" id="em1" name="companyEmail" placeholder="Email">
            <h2 align="center">Contract Information</h1>
            <label for="itm">Item</label>
            <input type="text" id="itm" name="itemName" placeholder="Item">
            <label for="spc">Propose Specification</label>
            <input type="text" id="spc" name="spec" placeholder="Specification">
            <label for="war">Warranty</label>
            <input type="text" id="war" name="warranty" placeholder="Warranty">
            <label for="prc">Price</label>
            <input type="number" id="prc" name="price" placeholder="0000.00">
            <label for="info">Additional Info</label>
            <input type="text" id="info" name="addInfo" placeholder="Comment">
            <input type="submit" value="Submit" id="btnsubmit">
        </form>
        </div>
    </body>
</html>