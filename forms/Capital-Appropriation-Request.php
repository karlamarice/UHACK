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
            #name{
                width: 60%;
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
            input[name="lst"]{
                height: 100px;
            }
            input[type=text],input[type=number]{
                width:100%;
                border-color:transparent;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
        </style>

    </head>

    <title>
        Capital Appropriation Request
    </title>

    <body>
        <form action="..\php\insertCAR.php" method="get">
            <table>
                <tr>
                    <th colspan="16"><h1 align="center">CAPITAL APPRORIATION REQUEST</h1></th>
                </tr>
                <tr>
                    <th colspan ="7">REQUESTING UNITS <br> <input type="text" name="reqUnits" require></th>
                    <th colspan ="3">RC CODE <br><input type="text" name="reqCode" require></th>
                    <th colspan = "3">DATE OF REQUEST <br><input type="date" name="reqDate" require></th>
                    <th colspan = "3">CAR NO. <br><input type="number" name="reqCarNo" require></th>
                </tr>
                <tr>
                    <th colspan ="16"><center> DETAILS OF REQUEST</center></th>
                    </tr>
                <tr>
                    <th>QTY</th>
                    <th colspan="8">DESCRIPTION </th>
                    <th colspan = "2">EST UNIT COST</th>
                    <th colspan="2">EST TOTAL COST</th>
                    <th colspan="2">ASSIGNEE NAME </th>
                    <th colspan= "1">ASSIGNEE'S SIGNITURE</th>
                    </tr>
                <tr>
                    <th><input type="number" name="qty1" require></th>
                    <th colspan="8"><textarea id="text" name="desc1"rows="10" cols="10" wrap="soft" maxlength="300" require></textarea></th>
                    <th colspan = "2"><input type="number" name="euc1" require></th>
                    <th colspan="2"><input type="number" name="etc1" require></th>
                    <th colspan="2"><input type="text" name="name1" require></th>
                    <th colspan= "1"><input type="checkbox" name="check1" value="TRUE" require> Check if Signed.</th>
                </tr>
                <tr>
                    <th><input type="number" name="qty2"></th>
                    <th colspan="8"><textarea id="text" name="desc2"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                    <th colspan = "2"><input type="number" name="euc2"></th>
                    <th colspan="2"><input type="number" name="etc2"></th>
                    <th colspan="2"><input type="text" name="name2"></th>
                    <th colspan= "1"><input type="checkbox" name="check2" value="TRUE"> Check if Signed.</th>
                </tr>
                <tr>
                    <th><input type="number" name="qty3"></th>
                    <th colspan="8"><textarea id="text" name="desc3"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                    <th colspan = "2"><input type="number" name="euc3"></th>
                    <th colspan="2"><input type="number" name="etc3"></th>
                    <th colspan="2"><input type="text" name="name3"></th>
                    <th colspan= "1"><input type="checkbox" name="check3" value="TRUE"> Check if Signed.</th>
                </tr>
                <tr>
                    <th><input type="number" name="qty4"></th>
                    <th colspan="8"><textarea id="text" name="desc4"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                    <th colspan = "2"><input type="number" name="euc4"></th>
                    <th colspan="2"><input type="number" name="etc4"></th>
                    <th colspan="2"><input type="text" name="name4"></th>
                    <th colspan= "1"><input type="checkbox" name="check4" value="TRUE"> Check if Signed.</th>
                </tr>
                    
                <tr>
                    <th colspan="16"><center>JUSTIFICATION/ BENIFITS</center></TH>
                </tr>
                <tr>
                    <th colspan="8"> If initial/ Expansion/ Addition /Process Improvement/ Compliance, state full justification/ Benifits <br> <textarea id="text" name="initial"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                    <th colspan="8"> If Replacement, please provide required service report and problems encountered with the current items <br> <textarea id="text" name="replacement"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                </tr>
                <tr>
                    <th colspan ="16"> Note: CARs without the required justification and attachments shall be automatically returned to the requesting unit</th>
                </tr>
                <tr>
                    <th colspan ="8">REQUESTED BY: <br> <input type="checkbox" name="reqCheck" value="TRUE" require> Click if Signed <br> Name:<input type="text" name="reqName" require></th>
                    <th colspan ="8">ENDORSED BY: <br> <input type="checkbox" name="endCheck" value="TRUE" require> Click if Signed <br> Name:<input type="text" name="endName" require></th>
                </tr>
                <tr>
                    <th colspan="16"><center> EVALUATION/ RECOMMENDATION</center></th>
                </tr>
                 <tr>
                    <th colspan ="12" rowspan="2">TMS/ UPI/ CPS/ SECURITY/ OTHERS (Findings, Observations, Recommendation, as Application)<br> <textarea id="text" name="TMS"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                    <th colspan="2"> DATE RECORDED <br> <input type="date" name="tmsDateRec"></th>
                    <th colspan="2"> DATE OUT <br> <input type="date" name="tmsDateOut"></th>
                </tr>
                <tr>
                    <th colspan="4"> <input type="Checkbox" name="tmsCheck" value="TRUE"> Check if Signed. <br>Name: <input type="text" id="name" name="tmsName"></th>
                </tr>
                <tr>
                    <th colspan ="12" rowspan="2">BPQM (for Stardard items required for new application / process)<br> <textarea id="text" name="BPQM"rows="10" cols="10" wrap="soft" maxlength="300" ></textarea></th>
                    <th colspan="2"> DATE RECORDED <br> <input type="date" name="bpqmDateRec"></th>
                    <th colspan="2"> DATE OUT <br> <input type="date" name="bpqmDateOut"></th>
                </tr>
                <tr>
                    <th colspan="4"> <input type="Checkbox" name="bpqmCheck" value="TRUE"> Check if Signed. <br>Name: <input type="text" id="name" name="bpqmName"></th>
                </tr>
                <tr>
                    <th colspan="16"><center>APPROVAL</center></th>
                </tr>
                <tr>
                    <th colspan="8"> <center>CHANNEL MANAGEMENT CENTER HEAD </center><br> Name: <input type="text" id="name" name="cmchName"><br><input type="checkbox" name="cmchCheck" value="TRUE"> Check if Signed</th>
                    <th colspan="8"> <center>PRESIDENT / CEO / POLCOM </center><br> Name: <input type="text" id="name" name="presName"><br><input type="checkbox" name="presCheck" value="TRUE"> Check if Signed</th>
                </tr>
                <tr>
                    <th colspan="16"><center>PROCUREMENT</center></th>
                </tr>
                <tr>
                    <th colspan="4">DATE RECIEVED <br> <input type="date" name="dateRec"></th>
                    <th colspan="12">PROCESSED BY: <br> <center> PROCUREMENT <br><input type="text" id ="name" name="procName" placeholder="Name..."style=" text-align: center;"> <br> <input type="checkbox" name="procCheck" value="TRUE"> Check if Signed </center> </th>
                </tr>
                <tr>
                    <th colspan="16"><center><input type="submit" value="Submit"></center></th>
                </tr>
            </table>
        </form>
    </body>
</html>