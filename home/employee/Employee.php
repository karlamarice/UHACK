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
        <title>Assets</title>
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
                <img class="profile-pic" src="../../res/N.png"/>
                <h1> <?php echo("{$_SESSION['name']}"); ?> </h1> <br>
                <div id="vl"><p> <?php echo("{$_SESSION['position']}"); ?> </p></div> 
            </div>
        </header>

        <!--Side Navigation bar-->
        <nav>
            <ul class="ul-sidenav">
                <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                <li class="li-sidenav"><a href="Emp-acct.php"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                <li class="li-sidenav"><a href="../../php/signOut.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
            </ul>
        </nav>

        <div id="tab-asset">
            <div id="tabbed">
                <ul>
                    <li><a href="#" id= "emp-trans" role = "button"> <br>Transfer  </a></li>
                    <li><a href="#" id= "emp-req-list" role = "button"> Request <br>List</a></li>
                    <li><a href="#" id= "emp-req-item" role = "button"> Request <br> Item</a></li>
                    <li class="active"> <a href="#" id= "emp-view-asset" role = "button"> View List <br> Assets </a></li>
                </ul>
            </div>
        </div>

        <div id="Emp-View-Assets">
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

        <div id="Emp-Req-Items" style="display:none;">
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

        <div id="Emp-Req-list" style="display:none;">
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
                    <td>REQ-ITEM</td>
                    <td>REQ-ITEM</td>
                    <td>REQ-ITEM</td>
                    <td>REQ-ITEM</td>
                    <td>REQ-ITEM</td>
                    <td>REQ-ITEM</td>
                </tr>
            </table>
        </div>

        <div id="Emp-transfer" style="display:none;">
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
    </body>
</html>