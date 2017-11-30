<?php
    session_start();
    if ($_SESSION['login'] != "true"){
        header("Location: ../../signIn.html");        
        echo '<script language="javascript">';
        echo 'alert("Log in Required!")';
        echo '</script>';
    }
?>

<html>
    <head>
        <title>Procure to pay</title>
        <link rel="stylesheet" type="text/css" href ="template.css">
        <link rel="stylesheet" type="text/css" href ="tab-layout.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script language="javascript" src="Tabs.js"></script>
    </head>

    <body>
        <!--Top Navigation bar-->
        <!--get DB image, name, position-->
        <header>
            <div id="profile">    
                <img cl<img class="profile-pic" src="../../res/N.png"/>
                <h1> <?php echo("{$_SESSION['name']}"); ?> </h1> <br>
                <div id="vl"><p> <?php echo("{$_SESSION['position']}"); ?> </p></div> 
            </div>
        </header>

        <!--Side Navigation bar-->
        <nav>
			<ul class="ul-sidenav">
                <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/pro.png"/> Procure to Pay </a></li>
                <li class="li-sidenav"><a href="Procurement Head.php"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                <li class="li-sidenav"><a href="PH-acct.html"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                <li class="li-sidenav"><a href="../../php/signOut.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
			</ul>
        </nav>
        
        <div id="tabbed">
            <ul>
                <li><a href="#" id= "phead-summ-bid" role = "button"> Summary of <br> Bidding</a></li>
                <li><a href="#" id= "phead-supp-contract" role = "button"> Supplier Contract <br>Management</a></li>
                <li><a href="#" id= "phead-purchase-order-list" role = "button"> Purchase <br> Order List</a></li>
                <li><a href="#" id= "phead-catalog" role = "button"> Item <br> Catalog</a></li>
                <li class="active"> <a href="#" id= "phead-list-req" role = "button"> List of <br> Requests </a></li>
            </ul>
        </div>


        <div id="PH-list-req">
            <p id="title"> LIST OF ASSETS</p>
            <table border='1' id="details">
                <tr>
                    <th>FFE Code</th>
                    <th>FFE Number</th>
                    <th>Item Name</th>
                    <th>Item Description</th>
                    <th>Assigned By</th>
                    <th>Date</th>
                </tr>

                <tr>
                    <td>M#6uHAKuja</td>
                    <td>X5Pruk%bRa</td>
                    <td>Anselmo Francia</td>
                    <td>Beautiful</td>
                    <td>Nobody</td>
                    <td>Denied</td>
                </tr>

                <tr>
                    <td>M#6uHAKuja</td>
                    <td>X5Pruk%bRa</td>
                    <td>Anselmo Francia</td>
                    <td>Beautiful</td>
                    <td>Nobody</td>
                    <td>Denied</td>
                </tr>
            </table>
        </div>

        <div id="PH-catalog" style="display:none;">
            <p id="title"> LIST OF ASSETS</p>
            <table border='1' id="details">
                <tr>
                    <th>FFE Code</th>
                    <th>FFE Number</th>
                    <th>Item Name</th>
                    <th>Item Description</th>
                    <th>Assigned By</th>
                    <th>Date</th>
                </tr>
        
                <tr>
                    <td>M#6uHAKuja</td>
                    <td>X5Pruk%bRa</td>
                    <td>Anselmo Francia</td>
                    <td>Handsometimes</td>
                    <td>Nobody</td>
                    <td>Denied</td>
                </tr>
            </table>
        </div>

        <div id="PH-purchase-order-list" style="display:none;">
        <p id="title"> LIST OF ASSETS</p>
            <table border='1' id="details">
                <tr>
                    <th>purchase-order-list</th>
                    <th>purchase-order-list</th>
                    <th>purchase-order-list</th>
                    <th>purchase-order-list</th>
                    <th>purchase-order-list</th>
                    <th>purchase-order-list</th>
                </tr>
            </table>
        </div>
        
        <div id="PH-supp-contract" style="display:none;">
        <p id="title"> LIST OF ASSETS</p>
            <table border='1' id="details">
                <tr>
                    <th>FFE Code</th>
                    <th>FFE Number</th>
                    <th>Item Name</th>
                    <th>Item Description</th>
                    <th>Assigned By</th>
                    <th>Date</th>
                </tr>
            </table>
        </div>
        
        <div id="PH-summ-bid" style="display:none;">
        <p id="title"> LIST OF ASSETS</p>
            <table border='1' id="details">
                <tr>
                    <th>Test</th>
                    <th>Test</th>
                    <th>Test</th>
                    <th>Test</th>
                    <th>Test</th>
                    <th>Test</th>
                </tr>
            </table>
        </div>
    </body>
</html>