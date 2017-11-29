<?php
    session_start();
?>

<html>
    <head>
        <title>Procure to Pay</title>
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
                <li class="li-sidenav"><a href="Employee.php"><img class="icons" src="../../res/H.png"/> Home </a></li> 
                <li class="li-sidenav"><a href="Emp-asset.php"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                <li class="li-sidenav"><a href="Emp-out.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
			</ul>
        </nav>

    </body>
</html>