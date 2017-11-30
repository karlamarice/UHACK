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
        <header>
            <div id="profile">    
                <img class="profile-pic" src="../../res/N.png"/>
                <h1> <?php echo("{$_SESSION['name']}"); ?> </h1> <br>
                <div id="vl"><p> <?php echo("{$_SESSION['position']}"); ?> </p></div> 
            </div>
        </header>
    
        <!--Side Navigation bar-->
        <nav>
            <ul class="ul-sidenav">                    
                <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/pro.png"/> Procurement </a></li>
                <li class="li-sidenav"><a href="Procurement Officer.php"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                <li class="li-sidenav"><a href="PO-acct.php"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                <li class="li-sidenav"><a href="../../php/signOut.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
            </ul>
        </nav>
            
        <div id="tabbed">
            <ul>
                <li><a href="#" id= "pofficer-summ-bid" role = "button"> Summary of <br> Bidding</a></li>
                <li><a href="#" id= "pofficer-supp-contract" role = "button"> Supplier Contract <br>Management</a></li>
                <li><a href="#" id= "pofficer-purchase-order-list" role = "button"> Purchase <br> Order List</a></li>
                <li><a href="#" id= "pofficer-catalog" role = "button"> Item <br> Catalog</a></li>
                <li class="active"> <a href="#" id= "pofficer-list-req" role = "button"> List of <br> Requests </a></li>
            </ul>
        </div>


        <div id="PO-list-req">
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

        <div id="PO-catalog" style="display:none;">
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

        <div id="PO-purchase-order-list" style="display:none;">
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
            
        <div id="PO-supp-contract" style="display:none;">
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
            
        <div id="PO-summ-bid" style="display:none;">
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