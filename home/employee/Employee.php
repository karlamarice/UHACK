<?php
    session_start();
?>

<html>
    <head>
        <title>Assets</title>
        <link rel="stylesheet" type="text/css" href ="template.css">
        <link rel="stylesheet" type="text/css" href ="tab-layout.css">
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
                <li class="li-sidenav"><a href="Emp-out.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
            </ul>
        </nav>

        <div id="tab-asset">
            <div id="tabbed">
                <ul>
                    <li> <br>Transfer  </li>
                    <li> Request <br> Item</li>
                    <li class="active">View List <br> Assets</li>
                </ul>
            </div>
        </div>

        <div id="View-Assets">
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
    </body>
</html>