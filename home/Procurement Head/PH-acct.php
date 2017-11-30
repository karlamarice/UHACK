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
        <title>My Account</title>
        <link rel="stylesheet" type="text/css" href ="template.css">
        <script language="javascript" src="Tabs.js"></script>
    </head>
    
    <body>
        <!--Top Navigation bar-->
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
                <li class="li-sidenav"><a href="PH-proc.php"><img class="icons" src="../../res/pro.png"/> Procure to Pay </a></li>
                <li class="li-sidenav"><a href="Procurement Head.php"><img class="icons" src="../../res/ass.png"/> Asset Management </a></li>
                <li class="li-sidenav"><a href="#"><img class="icons" src="../../res/MA.png"/>My Account</a></li>
                <li class="li-sidenav"><a href="../../php/signOut.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li> <!--LOGOFF.PHP-->
            </ul>
        </nav>
    </body>
</html>