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
             #text{
                height: 100px;
                width:100%;
                overflow:hidden; 
                resize:none;
                border-color:transparent;
            }
            input[name="lst"]{
                height: 100px;
            }
            th, td {
            padding: 5px;
            text-align: left;
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
            input[type=submit]:hover {
                background-color: #45a049;
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
            input[type=submit]:hover {
                background-color: #45a049;
            }
            input[type=text],input[type=date], input[type=number]{
                width:100%;
                border-color:transparent;
                
            }
        </style>
    </head>

    <title>
        Purchase Requisition
    </title>

    <body>
        <form action="..\php\insertPurReq.php" method="get">
            <table>
                <tr>
                    <th colspan="17"><h1 align="center">PURCHASE REQUISITION</h1></th>
                </tr>
                <tr>
                    <th colspan = "8"> Requesting Unit <br> <input type = "text" name = "reqUnit" value = ""></th>
                    <th colspan = "4"> SOL /RC ID <br> <input type= "text" name= "SOL" value = "" > </th>
                    <th colspan ="5"> Purchase Requisition Number <br> <input type= "text" name= "reqNum" value= ""> </th>
                </tr>
                <tr>
                    <th colspan = "8"> Delivery Address <br> <input type="text" name = "address" value = ""> </th>
                    <th colspan = "4"> Charged to (Specify charging code) <br> <input type ="text" name= "chargedTo"> </th>
                    <th colspan = "5"> Date <br> <input type="date" name = "reqDate" > </th>
                    </tr>
                <tr>
                    <th colspan="1" rowspan = "2"> Quantity </th>
                    <th colspan="1" rowspan = "2"> Unit </th>
                    <th colspan ="12" rowspan = "2"> Item Description </th>
                    <th colspan = "3"> To be Filled out for furniture/ equipment request</th>
                    </tr>
                <tr>
                    <th colspan = "1"> ESTIMATED UNIT COST</th>
                    <th colspan = "1"> ESTIMATED TOTAL COST </th>
                    <th colspan = "1"> ASSIGNEE NAME </th>
                    </tr>
                <tr>
                    <th colspan="1"> <input type = "number" name= "qty1"> </th>
                    <th colspan="1"> <input type = "text" name= "unit1"> </th>
                    <th colspan = "12"> <textarea id="text"  name="itemDesc1" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                    <th colspan = "1"> <input type = "number" name= "euc1"> </th>
                    <th colspan = "1"> <input type = "number" name= "etc1"> </th>
                    <th colspan = "1"> <input type = "text" name= "assignee1" placeholder="Name..."> </th>                    
                </tr>
                <tr>
                    <th colspan="1"> <input type = "number" name= "qty2"> </th>
                    <th colspan="1"> <input type = "text" name= "unit2"> </th>
                    <th colspan = "12"> <textarea id="text"  name="itemDesc2" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                    <th colspan = "1"> <input type = "number" name= "euc2"> </th>
                    <th colspan = "1"> <input type = "number" name= "etc2"> </th>
                    <th colspan = "1"> <input type = "text" name= "assignee2" placeholder="Name..."> </th>                       
                </tr>
                <tr>
                    <th colspan="1"> <input type = "number" name= "qty3"> </th>
                    <th colspan="1"> <input type = "text" name= "unit3"> </th>
                    <th colspan = "12"> <textarea id="text"  name="itemDesc3" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                    <th colspan = "1"> <input type = "number" name= "euc3"> </th>
                    <th colspan = "1"> <input type = "number" name= "etc3"> </th>
                    <th colspan = "1"> <input type = "text" name= "assignee3" placeholder="Name..."> </th>                      
                </tr>
                <tr>
                    <th colspan="1"> <input type = "number" name= "qty4"> </th>
                    <th colspan="1"> <input type = "text" name= "unit4"> </th>
                    <th colspan = "12"> <textarea id="text"  name="itemDesc4" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                    <th colspan = "1"> <input type = "number" name= "euc4"> </th>
                    <th colspan = "1"> <input type = "number" name= "etc4"> </th>
                    <th colspan = "1"> <input type = "text" name= "assignee4" placeholder="Name..."> </th>                      
                </tr>
                <tr>
                    <th colspan="1"> <input type = "number" name= "qty5"> </th>
                    <th colspan="1"> <input type = "text" name= "unit5"> </th>
                    <th colspan = "12"> <textarea id="text"  name="itemDesc5" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                    <th colspan = "1"> <input type = "number" name= "euc5"> </th>
                    <th colspan = "1"> <input type = "number" name= "etc5"> </th>
                    <th colspan = "1"> <input type = "text" name= "assignee5" placeholder="Name..."> </th>                       
                </tr>
                <tr>
                    <th colspan = "17"> Purpose <br><textarea id="text"  name="purpose" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                </tr>
                <tr>
                    <th colspan = "8"> Prepared By: <br> <input type= "text" name= "preparedBy" value = ""placeholder="Name..."> </th>
                    <th colspan = "9"> Approved By: <br> <input type= "text" name= "approvedBy" value = ""placeholder="Name..."> </th>
                </tr>
                <tr>
                    <th colspan = "17"> EVALUATION/ RECOMMENDATION <br> <textarea id="text"  name="er" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th> 
                </tr>
                <tr>
                    <th colspan = "9"> EVALUATION/ RECOMMENDED BY:<br><input type= "text" name ="erName" value = ""placeholder="Name..."></th>
                    <th colspan = "8"> DATE: <br><input type= "date" name ="erDate" value = ""> </th>
                    </tr>
                <tr>
                    <th colspan = "17"> For CPS-Procurement team Use Only </th>
                    </tr>
                <tr>
                    <th colspan="6"> RECOMMENDATIONS </th>
                    <th colspan ="9"> REMARKS </th>
                    <th colspan = "1" rowspan = "2"> RECIEVE BY: <br> <input type="text" name= "recieveName" value = "" placeholder="Name..."> </th>
                    <th colspan ="2" rowspan="2">DATE:<input type="date" name= "date" value = ""></th>
                    </tr>
                <tr>
                    <th colspan="2"> SUPPLIER</th>
                    <th colspan ="4"><input type= "text" name="supplier" value = ""> </th>
                    <th rowspan = "3" colspan="9"> <textarea id="text"  name="remarks" rows="10" cols="10" wrap="soft" maxlength="300" ></textarea> </th>
                    </tr>
                <tr>
                    <th colspan="2"> COST </th>
                    <th colspan ="4"><input type= "number" name="cost" value = ""> </th>
                    <th colspan = 5 rowspan ="2">EXPECTED DELIVERY DATE <br> <input type = "date" name= "expDate"> </th>
                    </tr>
                <tr>
                    <th colspan="2"> REF. NO. </th>
                    <th colspan ="4"><input type= "number" name="refNo" value = ""> </th>
                    </tr>
                <tr>
                <th colspan="17"><center><input type= "submit" value="Submit"></center></th>
                </tr>
            </table>
        </form>
    </body>
    </html>
