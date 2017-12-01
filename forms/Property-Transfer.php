<?php
    session_start();
?>

<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: left;
            }
            #text{
                height: 100px;
                width:100%;
                overflow:hidden; 
                resize:none;
                border-color:transparent;
            }
            #lst{
                height: 100px;
            }
            input[type=submit] {
                height: 50%;
                width: 20%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=text],input[type=date], input[type=number]{
                width:100%;
                border-color:transparent;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }

        </style>

    </head>
    <title>
        Property Transfer
    </title>
    <body>
        <form action="..\php\insertTransfer.php" method="get">
            <table>
                <tr>
                    <th colspan="22"><h1 align="center">PROPERTY TRANSFER</h1></th>
                </tr>
                <tr>
                    <th colspan = "11">FMGS-0402-10 </th>
                    <th colspan = "11"> FA/CI TF NO.: <br> <input type="number" name= "tfNo" require>
                    </tr>
                <tr>
                    <th colspan= "22"> <center>UNION BANK <br>  PROPERTY TRANSFER FORM</center> </th>
                </tr>
                <tr>
                    <th colspan = "12"> Division/Unit: <input type="text" name= "division" require></th>
                    <th colspan = "4"> SOL/RC : <input type="text" name= "SOL" require></th>
                    <th colspan = "6"> Date : <input type="date" name="date" require></th>
                    </tr>
                <tr>
                    <th colspan = "4"> <center>TYPE <BR> OF <BR> MOVEMENT </center></th>
                    <th colspan = "18"> <input type="radio" name= "movement" value="Division-Unit">Change of Assignee within Devision/Unit <br>
                                        <input type="radio" name= "movement" value="Inventory">From Devision/Unit to Inventory <br>
                                        <input type="radio" name= "movement" value="between">Between Devision/unit - From <input type="text" name="fromName" style="width:35%; border-color:azure;" > to <input type="text" name="toName" style="width:35%; border-color:azure;"> </th>
                    </tr>
                <tr>
                    <th> Item</th>
                    <th> Qty </th>
                    <th> Unit </th>
                    <th colspan= "8"> Description </th>
                    <th colspan= "1"> Tag no. </th>
                    <th colspan = "2"> Present Assignee </th>
                    <th colspan = "2"> New Assignee </th>
                    <th colspan = "1"> CPSR no. <br> (if irreparable) </th>
                    <th colspan = "5"> Remarks </th>
                </tr>
                <tr>
                    <th > <input type ="text" name= "item" id="lst" require> </th>
                    <th > <input type ="text" name= "qty"id="lst" require> </th>
                    <th > <input type ="text" name= "unit"id="lst" require> </th>
                    <th colspan = "8" > <textarea id="text"  name="itemDesc" rows="10" cols="10" wrap="soft" maxlength="300"></textarea> </th>
                    <th colspan = "1" > <input type ="text" name= "tagNo" id="lst" require> </th>
                    <th colspan = "2" > <input type ="text" name= "present" id="lst" require> </th>
                    <th colspan = "2" > <input type ="text" name= "new" id="lst" require> </th>
                    <th colspan = "1" > <input type ="text" name= "cpsr" id="lst"> </th>
                    <th colspan = "5" > <textarea id="text" name="remarks" rows="10" cols="10" wrap="soft" maxlength="300"></textarea></th>
                </tr>
                <tr>
                    <th colspan= "3"> ORIGINATING UNIT</th>
                    <th colspan ="4" rowspan = "2"> FLOOR GUARD  <br><input type ="checkbox" name= "oGuardCheck" value="TRUE">Check if Confirmed </th>
                    <th colspan = "6"> RECIEVING UNIT </th>
                    <th colspan = "3" rowspan = "2"> FLOOR GUARD <br> <input type ="Checkbox" name= "rGuardCheck" value="TRUE"> Check if Confirmed</th>
                    <th colspan = "6"> FIXED ASSET UNIT </th>
                </tr>
                <tr>
                    <th colspan  = "3" > Approved by: <input type="text" name= "oName" placeholder="Name.."><br><input type="checkbox" name="oCheck"> Check if Signed</th>
                    <th colspan ="4" >Approved by: <input type="text" name= "rName"placeholder="Name.."><br><input type="checkbox" name="rCheck"> Check if Signed</th>
                    <th colspan="2" >SOL/RC <br> <input type="checkbox" name="solCheck"> Check if Confirmed</th>
                    <th colspan ="3" > Conducted by: <input type="text" name="cName"placeholder="Name.."><br><input type="checkbox" name="cCheck">  Check if Confirmed</th>
                    <th colspan = "3" > Noted by: <input type="text" name="nName" placeholder="Name.."><br> <input type="checkbox" name="nCheck">Check if Confirmed</th>
                    </tr>
                <tr>
                    <th colspan ="22"><center><input type ="submit" value="Submit"></center></th>
                </tr>
            </table>
        </form>
    </body>
</html>