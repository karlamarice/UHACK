<?php
    session_start();
?>

<html>
    <head>
        <title>Employee Name</title>
        <link rel="stylesheet" type="text/css" href ="template.css">
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
                <li class="li-sidenav"><a href="Procurement Officer.php"><img class="icons" src="../../res/H.png"/> Home </a></li> 
                <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/pro.png"/> Procurement </a></li>
                <li class="li-sidenav"><a href="PO-pay.php"><img class="icons" src="../../res/pay.png"/> Payment Process </a></li>
                <li class="li-sidenav"><a href="PO-asset.php"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                <li class="li-sidenav"><a href="PO-acct.php"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                <li class="li-sidenav"><a href="PO-out.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
            </ul>
        </nav>
            
        <div id="tab-procurement">
            <div id="tabbed">
                <ul>
                    <li>Summary of <br> Biddings</li>
                    <li>List of <br> Purchase Order</li>
                    <li>Supplier Contract <br> Management</li>
                    <li>Item <br> Catalog</li>
                    <li class="active">List of <br> Requests </li>
                </ul>
            </div>
        </div>
    </body>
</html>