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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script> 
            $(document).ready(function(){
                    $("#emp-view-asset").click(function(){
                    $("#Emp-View-Assets").show();
                    $("#Emp-Req-Items").hide();
                    $("#Emp-Req-list").hide();
                    $("#Emp-transfer").hide();
                });
            });

            $(document).ready(function(){
                    $("#emp-req-item").click(function(){
                    $("#Emp-Req-Items").show();
                    $("#Emp-Req-list").hide();
                    $("#Emp-View-Assets").hide();
                    $("#Emp-transfer").hide();
                });
            });

            $(document).ready(function(){
                    $("#emp-req-list").click(function(){
                    $("#Emp-Req-Items").hide();
                    $("#Emp-Req-list").show();
                    $("#Emp-View-Assets").hide();
                    $("#Emp-transfer").hide();
                });
            });

            $(document).ready(function(){
                    $("#emp-trans").click(function(){
                    $("#Emp-transfer").show();
                    $("#Emp-View-Assets").hide();
                    $("#Emp-Req-Items").hide();
                    $("#Emp-Req-list").hide();
                });
            });
        </script>
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
                <li class="li-sidenav"><a href="../../php/signOut.php"><img class="icons" src="../../res/SO.png"/>Sign out</a></li>
			</ul>
        </nav>

        <div id="tab-asset">
            <div id="tabbed">
                <ul>
                    <li class="active"><a href="#" id= "emp-trans" role = "button"> <br>Transfer  </a></li>
                    <li ><a href="#" id= "emp-req-list" role = "button"> Request <br>List</a></li>
                    <li><a href="#" id= "emp-req-item" role = "button"> Request <br> Item</a></li>
                    <li ><a href="#" id= "emp-view-asset" role = "button"> View List <br> Assets </a></li>
                </ul>
            </div>
        </div>

        <!--==================================================VIEW ASSETS TAB========================================================-->
        <div id="Emp-View-Assets" style="display:none;">
        <p id="title"> LIST OF ASSETS</p>
        <button class="export-btn"   id="export"> Export </button> <!--Wala pang ginagawa-->
        <table id="details">
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

        <!--==================================================REQUEST ITEM TAB========================================================-->
        <div id="Emp-Req-Items" style="display:none;">
            <p id="title">REQUEST ITEM</p>
            <button class="export-btn" id="New-item"><a href="[Form] Item-Form.html"> New Request </a></button>
            <button class="req-btn" id="Request"><a href="[Form] Purchase-Req.html"> Request </a></button>
            <div id="container">
                <div id="item">
                    <div class="item-img"><img src="./images/item1.png" width="125" height="185"></div>
                    <div class="item-desc"> Sample data: Lenovo A6600 Plus 2GBRAM/16GB ROM (Black) </div>
                    <div class="no-orders"> Number of orders: <input type="number" class="ipt-orders" placeholder="0"></div>
                </div>
                
                <div id="item">
                    <div class="item-img"><img src="./images/item2.png" width="125" height="185"></div>
                    <div class="item-desc"> Sample data: Paper One Bond Paper All Purpose Paper 80gsm 8.27in11.69in A4 (5 ream) </div>
                    <div class="no-orders"> Number of orders: <input type="number" class="ipt-orders" placeholder="0"></div>
                </div>

                <div id="item">
                    <div class="item-img"><img src="./images/item3.png" width="125" height="185"></div>
                    <div class="item-desc"> Sample data: ihome 31-2 Mesh Office Chair with Headrest (Black) </div>
                    <div class="no-orders"> Number of orders: <input type="number" class="ipt-orders" placeholder="0"></div>
                </div>
                <div id="item">
                    <div class="item-img"><img src="./images/item4.png" width="125" height="185"></div>
                    <div class="item-desc"> Sample data: ihome 31-2 Mesh Office Chair with Headrest (Black) </div>
                    <div class="no-orders"> Number of orders: <input type="number" class="ipt-orders" placeholder="0"></div>
                </div>
            </div>
        </div>

        <!--==================================================REQUEST LIST TAB========================================================-->
        <div id="Emp-Req-list" style="display:none;">
        <p id="title"> REQUEST LIST</p>
            <div class="Reqitem-container">
                <div class="table">
                    <a class="row" href="[Form] Purchase-Req.html">
                        <div class="cell">
                            Mouse
                        </div>
                    </a>
                    <a class="row" href="[Form] Purchase-Req.html">
                        <div class="cell">
                            Upuan
                        </div>
                    </a>
                    <a class="row" href="[Form] Purchase-Req.html">
                        <div class="cell">
                            Mouse
                        </div>
                    </a>
                    <a class="row" href="[Form] Purchase-Req.html">
                        <div class="cell">
                            Upuan
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!--==================================================TRANSFER TAB========================================================-->
        <div id="Emp-transfer" >
            <p id="title"> TRANSFER / RECEIVE</p>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" class="search" placeholder="Search.." name="search">
                </form>
            </div>
            <button class="transfer-form" id="Transfer"><a href="[Form] Property-Transfer.html"> Transfer Form </a></button>
        </div>
    </body>
</html>