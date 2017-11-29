<?php
    session_start();
?>

<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" type="text/css" href ="template.css">
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
                    <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/pro.png"/> Procurement </a></li>
                    <li class="li-sidenav"><a href="Head or Manager.php"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                    <li class="li-sidenav"><a href="HM-acct.php"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                    <li class="li-sidenav"><a href="HM-out.php"><img class="icons" src="./i../../res/SO.png"/>Sign out</a></li>
			</ul>
        </nav>

        <div id="tab-proc">
            <div id="tabbed">
                <ul>
                    <li> Summary of <br> Bidding  </li>
                    <li> Supplier Contract<br>Management  </li>
                    <li> Item <br> Catalog</li>
                    <li class="active">List of <br> Requests</li>
                </ul>
            </div>
        </div>
    </body>
</html>s