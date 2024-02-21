<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="gray">
    <form action="script.php" method="post">
        <?php
        $id=$_GET['id'];
        $sql1="SELECT * FROM first where id='$id'";
        $res=mysqli_query($con,$sql);

        if(mysqli-num-rows($res)>0){
            $row=mysqli_fetch_asssoc($res);
            ?>
                    <lable>Team Num</lable>
        <input type="text" name="teamnum" class="f1"><br><br>
        <lable>Style Num</lable>
        <input type="text" name="stylenum" class="f2"><br><br>
        <lable>Production Start Date</lable>
        <input type="date" name="startdate" class="f3"><br><br>
        <lable>QCD</lable>
        <input type="text" name="qcd" class="f4"><br><br>
        <lable>Product Basket</lable>
        <select name="PB">
             <option value="a">a</option>
             <option value="a">a</option>
             <option value="a">a</option>
        </select>
        <br><br>
        <label>Chassies</label>
        <input type="text" name="chasy1" class="f5">
        <input type="text" name="chasy2" class="f6">
        <input type="text" name="chasy3" class="f7">
        <table border="1">
            <tr>
                <th>Number</th>
                <th>Day</th>
                <th>Day types</th>
                <th>Activity</th>
                <th>Main Responsibility</th>
                <th>Team</th>
                <th>Person</th>
                <th>Activity</th>
                <th>Date</th>
                <th>Root Cause</th>

            </tr>
            <tr>
                <td>1</td>
                <td>13Day</td>
                <td>13D</td>
                <td>Planned styles material in house</td>
                <td>MERCH </td>
                <td>Merch</td>
                <td> <input type="text" name="13.1.1" class="13.1.1"></td>
                <td><select name="13.1.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="13.1.3" class="13.1.3"></td>
                <td><input type="text" name="13.1.4" class="13.1.4"></td>

            </tr>

            <tr>
                <td>2</td>
                <td>13Day</td>
                <td>13D</td>
                <td>Freez th plan</td>
                <td>PLAN</td>
                <td>Plan</td>
                <td> <input type="text" name="13.2.1" class="13.2.1"></td>
                <td><select name="13.2.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="13.2.3" class="13.2.3"></td>
                <td><input type="text" name="13.2.4" class="13.2.4"></td>


            </tr>
            <tr>
                <td>3</td>
                <td>13Day</td>
                <td>13D</td>
                <td>sample recevive </td>
                <td>TEC </td>
                <td>(FN)-Pilot Evaluator </td>
                <td> <input type="text" name="13.3.1" class="13.3.1"></td>
                <td><select name="13.3.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="13.3.3" class="13.3.3"></td>
                <td><input type="text" name="13.3.4" class="13.3.4"></td>
                
                

            </tr>

            <tr>
                <td>4</td>
                <td>13Day</td>
                <td>13D</td>
                <td>patter received </td>
                <td>TEC </td>
                <td>Pilot Evaluator(FN)</td>
                <td> <input type="text" name="13.4.1" class="13.4.1"></td>
                <td><select name="13.4.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="13.4.3" class="13.4.3"></td>
                <td><input type="text" name="13.4.4" class="13.4.4"></td>

            </tr>
            <tr>
                <td>5</td>
                <td>13Day</td>
                <td>13D</td>
                <td>2 pc cut pannels </td>
                <td>TEC </td>
                <td>Tech/ Pilot Evaluator (FN) </td>
                <td> <input type="text" name="13.5.1" class="13.5.1"></td>
                <td><select name="13.5.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="13.5.3" class="13.5.3"></td>
                <td><input type="text" name="13.5.4" class="13.5.4"></td>

            </tr>
            <tr>
                <td>6</td>
                <td>10Day</td>
                <td>10D</td>
                <td>Standard Vedio sharig</td>
                <td>IE</td>
                <td>COST IE \G.TECH </td>
                <td> <input type="text" name="10.6.1" class="10.6.1"></td>
                <td><select name="10.6.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="10.6.3" class="10.6.3"></td>
                <td><input type="text" name="10.6.4" class="10.6.4"></td>

            </tr>
            <tr>
                <td>7</td>
                <td>10Day</td>
                <td>10D</td>
                <td>method video</td>
                <td>IE </td>
                <td>COST IE \G.TECH </td>
                <td> <input type="text" name="10.7.1" class="10.7.1"></td>
                <td><select name="10.7.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="10.7.3" class="10.7.3"></td>
                <td><input type="text" name="10.7.4" class="10.7.4"></td>

            </tr>
            <tr>
                <td>8</td>
                <td>10Day</td>
                <td>10D</td>
                <td>Risk Analysis meeting </td>
                <td>TEC </td>
                <td>Tech \ IE \ Mech </td>
                <td> <input type="text" name="10.8.1" class="10.8.1"></td>
                <td><select name="10.8.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="10.8.3" class="10.8.3"></td>
                <td><input type="text" name="10.8.4" class="10.8.4"></td>

            </tr>
            <tr>
                <td>9</td>
                <td>10Day</td>
                <td>10D</td>
                <td>Ensure all Critical Machines,Attachments,folders </td>
                <td>M\C </td>
                <td>Mechanic </td>
                <td> <input type="text" name="10.9.1" class="10.9.1"></td>
                <td><select name="10.9.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="10.9.3" class="10.9.3"></td>
                <td><input type="text" name="10.9.4" class="10.9.4"></td>

            </tr>
            <tr>
                <td>10</td>
                <td>10Day</td>
                <td>10D</td>
                <td>Pattern accuracy against the 2pcs </td>
                <td>TEC</td>
                <td>Technician </td>
                <td> <input type="text" name="10.10.1" class="10.10.1"></td>
                <td><select name="10.10.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="10.10.3" class="10.10.3"></td>
                <td><input type="text" name="10.10.4" class="10.10.4"></td>

            </tr>
            <tr>
                <td>11</td>
                <td>10Day</td>
                <td>10D & 9D</td>
                <td>2pcs complete </td>
                <td>TEC </td>
                <td>Technician </td>
                <td> <input type="text" name="10.11.1" class="10.11.1"></td>
                <td><select name="10.11.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="10.11.3" class="10.11.3"></td>
                <td><input type="text" name="10.11.4" class="10.11.4"></td>

            </tr>
            <tr>
                <td>12</td>
                <td>9Day</td>
                <td>9D</td>
                <td>share the coments in conclusion meeting with development Team</td>
                <td>TEC </td>
                <td>Technician </td>
                <td> <input type="text" name="9.12.1" class="9.12.1"></td>
                <td><select name="9.12.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="9.12.3" class="9.12.3"></td>
                <td><input type="text" name="9.12.4" class="9.12.4"></td>

            </tr>
            <tr>
                <td>13</td>
                <td>9Day</td>
                <td>9D</td>
                <td>Identify critical operations\Critical attachments\folders\Preventive actions</td>
                <td>M\c </td>
                <td>Mechanics</td>
                <td> <input type="text" name="9.13.1" class="9.13.1"></td>
                <td><select name="9.13.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="9.13.3" class="9.13.3"></td>
                <td><input type="text" name="9.13.4" class="9.13.4"></td>

            </tr>
            <tr>
                <td>14</td>
                <td>9Day</td>
                <td>9D</td>
                <td>ensure pattern accuracy (cut marks, shape, measurments, etc)</td>
                <td>TEC </td>
                <td>Pilot Evaluator(FN)</td>
                <td> <input type="text" name="9.14.1" class="9.14.1"></td>
                <td><select name="9.14.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="9.14.3" class="9.14.3"></td>
                <td><input type="text" name="9.14.4" class="9.14.4"></td>

            </tr>
            <tr>
                <td>15</td>
                <td>9Day</td>
                <td>9D</td>
                <td>Handover meeting - to factory</td>
                <td>Dev</td>
                <td>Technician\dev</td>
                <td> <input type="text" name="9.15.1" class="9.15.1"></td>
                <td><select name="9.15.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="9.15.3" class="9.15.3"></td>
                <td><input type="text" name="9.15.4" class="9.15.4"></td>

            </tr>
            <tr>
                <td>16</td>
                <td>8Day</td>
                <td>8D</td>
                <td>Fabric and trims in house</td>
                <td>STR</td>
                <td>Stores\Merchant</td>
                <td> <input type="text" name="8.16.1" class="8.16.1"></td>
                <td><select name="8.16.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="8.16.3" class="8.16.3"></td>
                <td><input type="text" name="8.16.4" class="8.16.4"></td>

            </tr>
            <tr>
                <td>17</td>
                <td>8Day</td>
                <td>8D</td>
                <td>Received material accuracy</td>
                <td>INS</td>
                <td>Fabric Inspection</td>
                <td> <input type="text" name="8.17.1" class="8.17.1"></td>
                <td><select name="8.17.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="8.17.3" class="8.17.3"></td>
                <td><input type="text" name="8.17.4" class="8.17.4"></td>

            </tr>
            <tr>
                <td>18</td>
                <td>8Day</td>
                <td>8D</td>
                <td>STW,GSD & OBD PATTERN HANDOVER(RPM checking)</td>
                <td>IE </td>
                <td>COST IE</td>
                <td> <input type="text" name="8.18.1" class="8.18.1"></td>
                <td><select name="8.18.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="8.18.3" class="8.18.3"></td>
                <td><input type="text" name="8.18.4" class="8.18.4"></td>

            </tr>
            <tr>
                <td>19</td>
                <td>8Day</td>
                <td>8D</td>
                <td>Fabric relaxing for - Pilot</td>
                <td>CUT </td>
                <td>Cutting</td>
                <td> <input type="text" name="8.19.1" class="8.19.1"></td>
                <td><select name="8.19.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="8.19.3" class="8.19.3"></td>
                <td><input type="text" name="8.19.4" class="8.19.4"></td>

            </tr>
            <tr>
                <td>20</td>
                <td>7Day</td>
                <td>7D</td>
                <td>PP meeting </td>
                <td>TEC </td>
                <td>Pilot Evaluator</td>
                <td> <input type="text" name="7.20.1" class="7.20.1"></td>
                <td><select name="7.20.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="7.20.3" class="7.20.3"></td>
                <td><input type="text" name="7.20.4" class="7.20.4"></td>

            </tr>
            <tr>
                <td>21</td>
                <td>7Day</td>
                <td>7D</td>
                <td>Pilot cut complete</td>
                <td>CUT</td>
                <td>Cutting</td>
                <td> <input type="text" name="7.21.1" class="7.21.1"></td>
                <td><select name="7.21.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="7.21.3" class="7.21.3"></td>
                <td><input type="text" name="7.21.4" class="7.21.4"></td>

            </tr>
            <tr>
                <td>22</td>
                <td>7Day</td>
                <td>7D</td>
                <td>Pilot Samples stitch\size set start</td>
                <td>TEC </td>
                <td>Technician</td>
                <td> <input type="text" name="7.22.1" class="7.22.1"></td>
                <td><select name="7.22.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="7.22.3" class="7.22.3"></td>
                <td><input type="text" name="7.22.4" class="7.22.4"></td>

            </tr>
            <tr>
                <td>23</td>
                <td>7Day</td>
                <td>7D</td>
                <td>Planned styles material in house</td>
                <td>PLAN </td>
                <td>plan</td>
                <td> <input type="text" name="7.23.1" class="7.23.1"></td>
                <td><select name="7.23.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="7.23.3" class="7.23.3"></td>
                <td><input type="text" name="7.23.4" class="7.23.4"></td>

            </tr>
            <tr>
                <td>24</td>
                <td>6Day</td>
                <td>6D</td>
                <td>Floor layout & product flow directions(Format STAT-F5)</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="6.24.1" class="6.24.1"></td>
                <td><select name="6.24.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="6.24.3" class="6.24.3"></td>
                <td><input type="text" name="6.24.4" class="6.24.4"></td>
            </tr>
            <tr>
                <td>25</td>
                <td>6Day</td>
                <td>6D</td>
                <td>Issue-machine requirment</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="6.25.1" class="6.25.1"></td>
                <td><select name="6.25.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="6.25.3" class="6.25.3"></td>
                <td><input type="text" name="6.25.4" class="6.25.4"></td>

            </tr>
            <tr>
                <td>26</td>
                <td>6Day</td>
                <td>6D</td>
                <td>Name Allocation"with operator Grading</td>
                <td>IE</td>
                <td>IE\Sup\QA\MC\Tech</td>
                <td> <input type="text" name="6.26.1" class="6.26.1"></td>
                <td><select name="6.26.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="6.26.3" class="6.26.3"></td>
                <td><input type="text" name="6.26.4" class="6.26.4"></td>

            </tr>
            <tr>
                <td>27</td>
                <td>6Day</td>
                <td>6D</td>
                <td>plan-Focus training Plan & start training for critical operations(Format STAT-F6)</td>
                <td>TEC </td>
                <td>Technician</td>
                <td> <input type="text" name="6.27.1" class="6.27.1"></td>
                <td><select name="6.27.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="6.27.3" class="6.27.3"></td>
                <td><input type="text" name="6.27.4" class="6.27.4"></td>

            </tr>
            <tr>
                <td>28</td>
                <td>6Day</td>
                <td>6D</td>
                <td>Cut pannels from similar fabricsfor Focus training</td>
                <td>PROD</td>
                <td>Production\Cutting manager</td>
                <td> <input type="text" name="6.28.1" class="6.28.1"></td>
                <td><select name="6.28.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="6.28.3" class="6.28.3"></td>
                <td><input type="text" name="6.28.4" class="6.28.4"></td>

            </tr>
            <tr>
                <td>29</td>
                <td>6Day</td>
                <td>6D</td>
                <td>Are critical machines, folders ,attachments Set for the bulk</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="6.29.1" class="6.29.1"></td>
                <td><select name="6.29.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="6.29.3" class="6.29.3"></td>
                <td><input type="text" name="6.29.4" class="6.29.4"></td>

            </tr>
            <tr>
                <td>30</td>
                <td>5Day</td>
                <td>5D</td>
                <td>layout discussion - Confirem - machines requirment\foot\gude\attachments\availability</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="5.30.1" class="5.30.1"></td>
                <td><select name="5.30.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.30.3" class="5.30.3"></td>
                <td><input type="text" name="5.30.4" class="5.30.4"></td>

            </tr>
            <tr>
                <td>31</td>
                <td>5Day</td>
                <td>5D</td>
                <td>plan change internal</td>
                <td></td>
                <td>operation</td>
                <td> <input type="text" name="5.31.1" class="5.31.1"></td>
                <td><select name="5.31.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.31.3" class="5.31.3"></td>
                <td><input type="text" name="5.31.4" class="5.31.4"></td>

            </tr>
            <tr>
                <td>32</td>
                <td>5Day</td>
                <td>5D</td>
                <td>plan change External</td>
                <td></td>
                <td>planing</td>
                <td> <input type="text" name="5.32.1" class="5.32.1"></td>
                <td><select name="5.32.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.32.3" class="5.32.3"></td>
                <td><input type="text" name="5.32.4" class="5.32.4"></td>

            </tr>
            <tr>
                <td>33</td>
                <td>5Day</td>
                <td>5D</td>
                <td>layout & constuction discussion meeting -critical\non critical operations</td>
                <td>TEC</td>
                <td>IE\Sup\QA\MC\Tech</td>
                <td> <input type="text" name="5.33.1" class="5.33.1"></td>
                <td><select name="5.33.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.33.3" class="5.33.3"></td>
                <td><input type="text" name="5.33.4" class="5.33.4"></td>

            </tr>
            <tr>
                <td>34</td>
                <td>5Day</td>
                <td>5D</td>
                <td>Mechanic Special notes in"Singhala Language"notes</td>
                <td>M\C</td>
                <td>Mechanic Special note</td>
                <td> <input type="text" name="5.34.1" class="5.34.1"></td>
                <td><select name="5.34.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.34.3" class="5.34.3"></td>
                <td><input type="text" name="5.34.4" class="5.34.4"></td>

            </tr>
            <tr>
                <td>35</td>
                <td>5Day</td>
                <td>5D</td>
                <td>Allocate same Technican did the Pilot allocate for the Bulk</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="5.35.1" class="5.35.1"></td>
                <td><select name="5.35.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.35.3" class="5.35.3"></td>
                <td><input type="text" name="5.35.4" class="5.35.4"></td>

            </tr>
            <tr>
                <td>36</td>
                <td>5Day</td>
                <td>5D</td>
                <td>Allocate same Mechanic did the Pilot allocate for the Bulk</td>
                <td>Mec</td>
                <td>Mechanic</td>
                <td> <input type="text" name="5.36.1" class="5.36.1"></td>
                <td><select name="5.36.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.36.3" class="5.36.3"></td>
                <td><input type="text" name="5.36.4" class="5.36.4"></td>

            </tr>
            <tr>
                <td>37</td>
                <td>5Day</td>
                <td>5D</td>
                <td>Pilot Apraisal meeting</td>
                <td>TEC</td>
                <td>Technician </td>
                <td> <input type="text" name="5.37.1" class="5.37.1"></td>
                <td><select name="5.37.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.37.3" class="5.37.3"></td>
                <td><input type="text" name="5.37.4" class="5.37.4"></td>

            </tr>
            <tr>
                <td>38</td>
                <td>5Day</td>
                <td>5D</td>
                <td>Fabric Relaxing for - Bulk cut</td>
                <td>CUT</td>
                <td>Cutting manager</td>
                <td> <input type="text" name="5.38.1" class="5.38.1"></td>
                <td><select name="5.38.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.38.3" class="5.38.3"></td>
                <td><input type="text" name="5.38.4" class="5.38.4"></td>

            </tr>
            <tr>
                <td>39</td>
                <td>5Day</td>
                <td>5D</td>
                <td>Updated Skill matrix  use to select operators</td>
                <td>IE</td>
                <td>IE\Sup\TECH\QA\MC</td>
                <td> <input type="text" name="5.39.1" class="5.39.1"></td>
                <td><select name="5.39.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.39.3" class="5.39.3"></td>
                <td><input type="text" name="5.39.4" class="5.39.4"></td>
            </tr>
            <tr>
                <td>40</td>
                <td>5Day</td>
                <td>5D</td>
                <td> Focus training completed - critical operations</td>
                <td>IE</td>
                <td>IE\Sup\TECH\QA\MC</td>
                <td> <input type="text" name="5.40.1" class="5.40.1"></td>
                <td><select name="5.40.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="5.40.3" class="5.40.3"></td>
                <td><input type="text" name="5.40.4" class="5.40.4"></td>

            </tr>
            <tr>
                <td>41</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Bulk cut Proceed</td>
                <td>CUT</td>
                <td>Cutting manager</td>
                <td> <input type="text" name="4.41.1" class="4.41.1"></td>
                <td><select name="4.41.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.41.3" class="4.41.3"></td>
                <td><input type="text" name="4.41.4" class="4.41.4"></td>

            </tr>
            <tr>
                <td>42</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Issue fabric for machines setting</td>
                <td>CUT</td>
                <td>Cutting manager</td>
                <td> <input type="text" name="4.42.1" class="4.42.1"></td>
                <td><select name="4.42.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.42.3" class="4.42.3"></td>
                <td><input type="text" name="4.42.4" class="4.42.4"></td>


            </tr>
            <tr>
                <td>43</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Cut\Threads\Trims - row materials arrange to the new styel</td>
                <td>PROD</td>
                <td>Team leader\Supervisor</td>
                <td> <input type="text" name="4.43.1" class="4.43.1"></td>
                <td><select name="4.43.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.43.3" class="4.43.3"></td>
                <td><input type="text" name="4.43.4" class="4.43.4"></td>


            </tr>
            <tr>
                <td>44</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Internal\External machines identification -write the list Bar code No:(Follow the format)</td>
                <td>M\C</td>
                <td>Mechanic/IE</td>
                <td> <input type="text" name="4.44.1" class="4.44.1"></td>
                <td><select name="4.44.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.44.3" class="4.44.3"></td>
                <td><input type="text" name="4.44.4" class="4.44.4"></td>


            </tr>
            <tr>
                <td>45</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Create space Back side of the line</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.45.1" class="4.45.1"></td>
                <td><select name="4.45.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.45.3" class="4.45.3"></td>
                <td><input type="text" name="4.45.4" class="4.45.4"></td>


            </tr>
            <tr>
                <td>46</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Machines - search and Bring to one place  seacrh external</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.46.1" class="4.46.1"></td>
                <td><select name="4.46.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.46.3" class="4.46.3"></td>
                <td><input type="text" name="4.46.4" class="4.46.4"></td>


            </tr>
            <tr>
                <td>47</td>
                <td>4Day</td>
                <td>4D</td>
                <td>"Red Tag - Waiting for Machine setting Running setting</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.47.1" class="4.47.1"></td>
                <td><select name="4.47.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.47.3" class="4.47.3"></td>
                <td><input type="text" name="4.47.4" class="4.47.4"></td>


            </tr>
            <tr>
                <td>48</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Line internal machines -"Yellow Tag"  inline selected machines</td>
                <td>M\C</td>
                <td>Mechanic/IE</td>
                <td> <input type="text" name="4.48.1" class="4.48.1"></td>
                <td><select name="4.48.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.48.3" class="4.48.3"></td>
                <td><input type="text" name="4.48.4" class="4.48.4"></td>


            </tr>
            <tr>
                <td>49</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Power supply, Ai supplyMachine lights,Thotili(dust collectors)</td>
                <td>ELEC</td>
                <td>Electrician</td>
                <td> <input type="text" name="4.49.1" class="4.49.1"></td>
                <td><select name="4.49.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.49.3" class="4.49.3"></td>
                <td><input type="text" name="4.49.4" class="4.49.4"></td>


            </tr>
            <tr>
                <td>50</td>
                <td>4Day</td>
                <td>4D</td>
                <td>1,2,3,4…Set in order - brought critical machine </td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.50.1" class="4.50.1"></td>
                <td><select name="4.50.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.50.3" class="4.50.3"></td>
                <td><input type="text" name="4.50.4" class="4.50.4"></td>


            </tr>
            <tr>
                <td>51</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Machines list - give to supervisor\Roving QC\Team Leader to bring needles</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.51.1" class="4.51.1"></td>
                <td><select name="4.51.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.51.3" class="4.51.3"></td>
                <td><input type="text" name="4.51.4" class="4.51.4"></td>


            </tr>
            <tr>
                <td>52</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Needles handover the needles to Mechanic</td>
                <td>SUP</td>
                <td>Supervisor\RQC\Team leader</td>
                <td> <input type="text" name="4.52.1" class="4.52.1"></td>
                <td><select name="4.52.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.52.3" class="4.52.3"></td>
                <td><input type="text" name="4.52.4" class="4.52.4"></td>


            </tr>
            <tr>
                <td>53</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Pattern boards readyness - nested Patterns</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="4.53.1" class="4.53.1"></td>
                <td><select name="4.53.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.53.3" class="4.53.3"></td>
                <td><input type="text" name="4.53.4" class="4.53.4"></td>


            </tr>
            <tr>
                <td>54</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Pattern boards readyness-nested Patterns</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="4.54.1" class="4.54.1"></td>
                <td><select name="4.54.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.54.3" class="4.54.3"></td>
                <td><input type="text" name="4.54.4" class="4.54.4"></td>


            </tr>
            <tr>
                <td>55</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Measurement charts readyness</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="4.55.1" class="4.55.1"></td>
                <td><select name="4.55.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.55.3" class="4.55.3"></td>
                <td><input type="text" name="4.55.4" class="4.55.4"></td>


            </tr>
            <tr>
                <td>56</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Preseting Plan (before 12 noon)</td>
                <td>IE</td>
                <td>IE\Technician</td>
                <td> <input type="text" name="4.56.1" class="4.56.1"></td>
                <td><select name="4.56.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.56.3" class="4.56.3"></td>
                <td><input type="text" name="4.56.4" class="4.56.4"></td>


            </tr>
            <tr>
                <td>57</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Conversion kits\folder\attachments (Machine kit Readyness)</td>
                <td>M\C</td>
                <td>Spairpart store</td>
                <td> <input type="text" name="4.57.1" class="4.57.1"></td>
                <td><select name="4.57.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.57.3" class="4.57.3"></td>
                <td><input type="text" name="4.57.4" class="4.57.4"></td>

            </tr>
            <tr>
                <td>58</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Fugai tag "previous learnings" (Machine kit readyness)</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.58.1" class="4.58.1"></td>
                <td><select name="4.58.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.58.3" class="4.58.3"></td>
                <td><input type="text" name="4.58.4" class="4.58.4"></td>

            </tr>
            <tr>
                <td>59</td>
                <td>4Day</td>
                <td>4D</td>
                <td>set the 1st  operation and confirm machine readyiness by technician</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.59.1" class="4.59.1"></td>
                <td><select name="4.59.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.59.3" class="4.59.3"></td>
                <td><input type="text" name="4.59.4" class="4.59.4"></td>

            </tr>
            <tr>
                <td>60</td>
                <td>4Day</td>
                <td>4D</td>
                <td>set the machine with actual fabric\theard\trims</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.60.1" class="4.60.1"></td>
                <td><select name="4.60.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.60.3" class="4.60.3"></td>
                <td><input type="text" name="4.60.4" class="4.60.4"></td>

            </tr>
            <tr>
                <td>61</td>
                <td>4Day</td>
                <td>4D</td>
                <td>Set the RPM and operational real "ply hight"</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.61.1" class="4.61.1"></td>
                <td><select name="4.61.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.61.3" class="4.61.3"></td>
                <td><input type="text" name="4.61.4" class="4.61.4"></td>
            </tr>
            <tr>
                <td>62</td>
                <td>4Day</td>
                <td>4D</td>
                <td>"Blue Tag" waiting for technician set every pending machine for technician check.</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="4.62.1" class="4.62.1"></td>
                <td><select name="4.62.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.62.3" class="4.62.3"></td>
                <td><input type="text" name="4.62.4" class="4.62.4"></td>

            </tr>
            <tr>
                <td>63</td>
                <td>4Day</td>
                <td>4D</td>
                <td> Focus training completed - critical operations</td>
                <td>IE</td>
                <td>IE\Sup\TECH\QA\MC</td>
                <td> <input type="text" name="4.63.1" class="4.63.1"></td>
                <td><select name="4.63.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="4.63.3" class="4.63.3"></td>
                <td><input type="text" name="4.63.4" class="4.63.4"></td>

            </tr>
            
            <tr>
                <td>64</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Thread size\colour & trims(check againts trim cards)</td>
                <td>RQC</td>
                <td>Tech\RQC</td>
                <td> <input type="text" name="3.64.1" class="3.64.1"></td>
                <td><select name="3.64.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.64.3" class="3.64.3"></td>
                <td><input type="text" name="3.64.4" class="3.64.4"></td>

            </tr>
            <tr>
                <td>65</td>
                <td>3Day</td>
                <td>3D</td>
                <td>maintain the "Presetting record sheet"fill the Real dutrations(format STAT F8)</td>
                <td>IE</td>
                <td>M\c\Tech\RQC\IE</td>
                <td> <input type="text" name="3.65.1" class="3.65.1"></td>
                <td><select name="3.65.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.65.3" class="3.65.3"></td>
                <td><input type="text" name="3.65.4" class="3.65.4"></td>

            </tr>
            <tr>
                <td>66</td>
                <td>3Day</td>
                <td>3D</td>
                <td>7.30am start 1st operator training in preset machine 1</td>
                <td>TEC</td>
                <td>Tech\IE\Sup</td>
                <td> <input type="text" name="3.66.1" class="3.66.1"></td>
                <td><select name="3.66.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.66.3" class="3.66.3"></td>
                <td><input type="text" name="3.66.4" class="3.66.4"></td>

            </tr>
            <tr>
                <td>67</td>
                <td>3Day</td>
                <td>3D</td>
                <td>RQC - All  operations need to check and confirm Mock-up</td>
                <td>RQC</td>
                <td>RQC\TECH</td>
                <td> <input type="text" name="3.67.1" class="3.67.1"></td>
                <td><select name="3.67.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.67.3" class="3.67.3"></td>
                <td><input type="text" name="3.67.4" class="3.67.4"></td>

            </tr>
            <tr>
                <td>68</td>
                <td>3Day</td>
                <td>3D</td>
                <td>BQC\AQL auditor- every critical operation need to check and confirm the mockup</td>
                <td>BQC</td>
                <td>BUYER QC</td>
                <td> <input type="text" name="3.68.1" class="3.68.1"></td>
                <td><select name="3.68.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.68.3" class="3.68.3"></td>
                <td><input type="text" name="3.68.4" class="3.68.4"></td>

            </tr>
            <tr>
                <td>69</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Machine setting-RFT-Right First Time</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="3.69.1" class="3.69.1"></td>
                <td><select name="3.69.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.69.3" class="3.69.3"></td>
                <td><input type="text" name="3.69.4" class="3.69.4"></td>

            </tr>
            <tr>
                <td>70</td>
                <td>3Day</td>
                <td>3D</td>
                <td>operator training -in Presetting 1st day(according to Presetting plan)</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="3.70.1" class="3.70.1"></td>
                <td><select name="3.70.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.70.3" class="3.70.3"></td>
                <td><input type="text" name="3.70.4" class="3.70.4"></td>

            </tr>
            <tr>
                <td>71</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Motivate Pllanned 10 operators to complete Presetting 50pcs within 1 hour</td>
                <td>PM\sup</td>
                <td>PM\Supervisor</td>
                <td> <input type="text" name="3.71.1" class="3.71.1"></td>
                <td><select name="3.71.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.71.3" class="3.71.3"></td>
                <td><input type="text" name="3.71.4" class="3.71.4"></td>

            </tr>
            <tr>
                <td>72</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Engineer Work stations best motion Economy (day-1)</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="3.72.1" class="3.72.1"></td>
                <td><select name="3.72.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.72.3" class="3.72.3"></td>
                <td><input type="text" name="3.72.4" class="3.72.4"></td>

            </tr>
            <tr>
                <td>73</td>
                <td>3Day</td>
                <td>3D</td>
                <td>45% -Efficiency-each newly trained Operator Efficiency</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="3.73.1" class="3.73.1"></td>
                <td><select name="3.73.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.73.3" class="3.73.3"></td>
                <td><input type="text" name="3.73.4" class="3.73.4"></td>

            </tr>
            <tr>
                <td>74</td>
                <td>3Day</td>
                <td>3D</td>
                <td>STW - technician operator training.(required asign a separate person)</td>
                <td>TEC</td>
                <td>M\c\Tech</td>
                <td> <input type="text" name="3.74.1" class="3.74.1"></td>
                <td><select name="3.71.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.74.3" class="3.74.3"></td>
                <td><input type="text" name="3.74.4" class="3.74.4"></td>

            </tr>
            <tr>
                <td>75</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Presetting target minimum set 10 machines and train 10 operators per day.</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="3.75.1" class="3.75.1"></td>
                <td><select name="3.75.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.75.3" class="3.75.3"></td>
                <td><input type="text" name="3.75.4" class="3.75.4"></td>
            </tr>
            <tr>
                <td>76</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Visualize Status - waiting for Mechanic\waiting for Technician\preset completed</td>
                <td>IE</td>
                <td>M\c\Tech\IE</td>
                <td> <input type="text" name="3.76.1" class="3.76.1"></td>
                <td><select name="3.76.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.76.3" class="3.76.3"></td>
                <td><input type="text" name="3.76.4" class="3.76.4"></td>

            </tr>
            <tr>
                <td>77</td>
                <td>3Day</td>
                <td>3D</td>
                <td>Re-Schedule - before 7.15 pm -Schedule pre-setting plan</td>
                <td>IE</td>
                <td>M\c\Tech\RQC\IE</td>
                <td> <input type="text" name="3.77.1" class="3.77.1"></td>
                <td><select name="3.77.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3.77.3" class="3.77.3"></td>
                <td><input type="text" name="3.77.4" class="3.77.4"></td>

            </tr>
            <tr>
                <td>78</td>
                <td>2Day</td>
                <td>2D</td>
                <td>maintain the "Presetting record sheet"fill the Real dutrations(format STAT F8)</td>
                <td>RQC</td>
                <td>M\c\Tech\RQC\IE</td>
                <td> <input type="text" name="2.78.1" class="2.78.1"></td>
                <td><select name="2.78.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.78.3" class="2.78.3"></td>
                <td><input type="text" name="2.78.4" class="2.78.4"></td>

            </tr>
            <tr>
                <td>79</td>
                <td>2Day</td>
                <td>2D</td>
                <td>7.30am start 1st operator training in preset machines for the 2nd day</td>
                <td>TEC</td>
                <td>Tech\IE\Sup</td>
                <td> <input type="text" name="2.79.1" class="2.79.1"></td>
                <td><select name="2.79.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.79.3" class="2.79.3"></td>
                <td><input type="text" name="2.79.4" class="2.79.4"></td>


            </tr>
            <tr>
                <td>80</td>
                <td>2Day</td>
                <td>2D</td>
                <td>RQC - All  operations need to check and confirm Mock-up</td>
                <td>RQC</td>
                <td>RQC\TECH</td>
                <td> <input type="text" name="2.80.1" class="2.80.1"></td>
                <td><select name="2.80.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.80.3" class="2.80.3"></td>
                <td><input type="text" name="2.80.4" class="2.80.4"></td>


            </tr>
            <tr>
                <td>81</td>
                <td>2Day</td>
                <td>2D</td>
                <td>BQC-every critical operation need to check and confirm the mockup</td>
                <td>BQC</td>
                <td>BUYER QC</td>
                <td> <input type="text" name="2.81.1" class="2.81.1"></td>
                <td><select name="2.81.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.81.3" class="2.81.3"></td>
                <td><input type="text" name="2.81.4" class="2.81.4"></td>

            </tr>
            <tr>
                <td>82</td>
                <td>2Day</td>
                <td>2D</td>
                <td>Machine setting-RFT-Right First Time</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="2.82.1" class="2.82.1"></td>
                <td><select name="2.82.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.82.3" class="2.82.3"></td>
                <td><input type="text" name="2.82.4" class="2.82.4"></td>

            </tr>
            <tr>
                <td>83</td>
                <td>2Day</td>
                <td>2D</td>
                <td>operator training -in Presetting 2nd day (according to Presetting plan)</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="2.83.1" class="2.83.1"></td>
                <td><select name="2.83.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.83.3" class="2.83.3"></td>
                <td><input type="text" name="2.83.4" class="2.83.4"></td>

            </tr>
            <tr>
                <td>84</td>
                <td>2Day</td>
                <td>2D</td>
                <td>STW - technician operator training.(required asign a separate person)</td>
                <td>TEC</td>
                <td>M\c\Tech</td>
                <td> <input type="text" name="2.84.1" class="2.84.1"></td>
                <td><select name="2.84.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.84.3" class="2.84.3"></td>
                <td><input type="text" name="2.84.4" class="2.84.4"></td>

            </tr>
            <tr>
                <td>85</td>
                <td>2Day</td>
                <td>2D</td>
                <td>Motivate Pllanned 10 operators to complete Presetting 50pcs within 1 hour</td>
                <td>SUP</td>
                <td>Supervisor</td>
                <td> <input type="text" name="2.85.1" class="2.85.1"></td>
                <td><select name="2.85.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.85.3" class="2.85.3"></td>
                <td><input type="text" name="2.85.4" class="2.85.4"></td>

            </tr>
            <tr>
                <td>86</td>
                <td>2Day</td>
                <td>2D</td>
                <td>Engineer Work stations best motion Economy (day 2 preset machines)</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="2.86.1" class="2.86.1"></td>
                <td><select name="2.86.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.86.3" class="2.86.3"></td>
                <td><input type="text" name="2.86.4" class="2.86.4"></td>

            </tr>
            <tr>
                <td>87</td>
                <td>2Day</td>
                <td>2D</td>
                <td>45% -Efficiency-each newly trained Operator Efficiency</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="2.87.1" class="2.87.1"></td>
                <td><select name="2.87.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.87.3" class="2.87.3"></td>
                <td><input type="text" name="2.87.4" class="2.87.4"></td>

            </tr>
            <tr>
                <td>88</td>
                <td>2Day</td>
                <td>2D</td>
                <td>Presetting target minimum set 10 machines and train 10 operators per day.</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="2.88.1" class="2.88.1"></td>
                <td><select name="2.88.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.88.3" class="2.88.3"></td>
                <td><input type="text" name="2.88.4" class="2.88.4"></td>

            </tr>
            <tr>
                <td>89</td>
                <td>2Day</td>
                <td>2D</td>
                <td>Visualize Status-waiting for Mechanic\waiting for Technician\preset completed</td>
                <td>IE</td>
                <td>M\c\Tech\IE</td>
                <td> <input type="text" name="2.89.1" class="2.89.1"></td>
                <td><select name="2.89.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.89.3" class="2.89.3"></td>
                <td><input type="text" name="2.89.4" class="2.89.4"></td>

            </tr>
            <tr>
                <td>90</td>
                <td>2Day</td>
                <td>2D</td>
                <td>Re-Schedule - before 7.15 pm -Schedule pre-setting plan</td>
                <td>IE</td>
                <td>M\c\Tech\RQC\IE</td>
                <td> <input type="text" name="2.90.1" class="2.90.1"></td>
                <td><select name="2.90.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2.90.3" class="2.90.3"></td>
                <td><input type="text" name="2.90.4" class="2.90.4"></td>

            </tr>
            <tr>
                <td>91</td>
                <td>1Day</td>
                <td>1D</td>
                <td>closeup plan</td>
                <td>IE</td>
                <td>IE\TECH\Mech</td>
                <td> <input type="text" name="1.91.1" class="1.91.1"></td>
                <td><select name="1.91.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.91.3" class="1.91.3"></td>
                <td><input type="text" name="1.91.4" class="1.91.4"></td>

            </tr>
            <tr>
                <td>92</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Feeding plan make  (balance input and WIP for each machine)</td>
                <td>IE</td>
                <td>IE\TECH\Mech</td>
                <td> <input type="text" name="1.92.1" class="1.92.1"></td>
                <td><select name="1.92.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.92.3" class="1.92.3"></td>
                <td><input type="text" name="1.92.4" class="1.92.4"></td>
            </tr>
            
            <tr>
                <td>93</td>
                <td>1Day</td>
                <td>1D</td>
                <td>maintain the "Presetting record sheet"fill the Real dutrations (format STAT F8)</td>
                <td>IE</td>
                <td>M\c\Tech\RQC\IE</td>
                <td> <input type="text" name="1.93.1" class="1.93.1"></td>
                <td><select name="1.93.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.93.3" class="1.93.3"></td>
                <td><input type="text" name="1.93.4" class="1.93.4"></td>

            </tr>
            
            <tr>
                <td>94</td>
                <td>1Day</td>
                <td>1D</td>
                <td>7.30am start 1st operator training in preset machines for the 3rd day</td>
                <td>TEC</td>
                <td>Tech\IE\Sup</td>
                <td> <input type="text" name="1.94.1" class="1.94.1"></td>
                <td><select name="1.94.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.94.3" class="1.94.3"></td>
                <td><input type="text" name="1.94.4" class="1.94.4"></td>


            </tr>
            
            <tr>
                <td>95</td>
                <td>1Day</td>
                <td>1D</td>
                <td>RQC-All operations need to check and confirm Mock-up</td>
                <td>RQC</td>
                <td>RQC\TECH</td>
                <td> <input type="text" name="1.95.1" class="1.95.1"></td>
                <td><select name="1.95.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.95.3" class="1.95.3"></td>
                <td><input type="text" name="1.95.4" class="1.95.4"></td>


            </tr>
            
            <tr>
                <td>96</td>
                <td>1Day</td>
                <td>1D</td>
                <td>BQC - every critical operation need to check and confirm the mockup</td>
                <td>RQC</td>
                <td>BUYER QC</td>
                <td> <input type="text" name="1.96.1" class="1.96.1"></td>
                <td><select name="1.96.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.96.3" class="1.96.3"></td>
                <td><input type="text" name="1.96.4" class="1.96.4"></td>


            </tr>
            
            <tr>
                <td>97</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Machine setting-RFT-Right First Time</td>
                <td>M\C</td>
                <td>Mechanic</td>
                <td> <input type="text" name="1.97.1" class="1.97.1"></td>
                <td><select name="1.97.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.97.3" class="1.97.3"></td>
                <td><input type="text" name="1.97.4" class="1.97.4"></td>


            </tr>
            
            <tr>
                <td>98</td>
                <td>1Day</td>
                <td>1D</td>
                <td>operator training -in Presetting 3rd day (according to Presetting plan)</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="1.98.1" class="1.98.1"></td>
                <td><select name="1.98.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.98.3" class="1.98.3"></td>
                <td><input type="text" name="1.98.4" class="1.98.4"></td>


            </tr>
            
            <tr>
                <td>99</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Motivate Pllanned 10 operators to complete Presetting 50pcs within 1 hour</td>
                <td>SUP</td>
                <td>Supervisor</td>
                <td> <input type="text" name="1.99.1" class="1.99.1"></td>
                <td><select name="1.99.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.99.3" class="1.99.3"></td>
                <td><input type="text" name="1.99.4" class="1.99.4"></td>


            </tr>
            
            <tr>
                <td>100</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Engineer Work stations best motion Economy (day -3 pre-set machines)</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="1.100.1" class="1.100.1"></td>
                <td><select name="1.100.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.100.3" class="1.100.3"></td>
                <td><input type="text" name="1.100.4" class="1.100.4"></td>


            </tr>
            
            <tr>
                <td>101</td>
                <td>1Day</td>
                <td>1D</td>
                <td>45% -Efficiency  - each newly trained Operator Efficiency</td>
                <td>IE</td>
                <td>IE</td>
                <td> <input type="text" name="1.101.1" class="1.101.1"></td>
                <td><select name="1.101.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.101.3" class="1.101.3"></td>
                <td><input type="text" name="1.101.4" class="1.101.4"></td>

            </tr>
            
            <tr>
                <td>102</td>
                <td>1Day</td>
                <td>1D</td>
                <td>STW-technician operator training.(required asign a separate person)</td>
                <td>TEC</td>
                <td>M\c\Tech</td>
                <td> <input type="text" name="1.102.1" class="1.102.1"></td>
                <td><select name="1.102.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.102.3" class="1.102.3"></td>
                <td><input type="text" name="1.102.4" class="1.102.4"></td>

            </tr>
            <tr>
                <td>103</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Presetting target minimum set 10 machines and train 10 operators per day.</td>
                <td>TEC</td>
                <td>Technician</td>
                <td> <input type="text" name="1.103.1" class="1.103.1"></td>
                <td><select name="1.103.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.103.3" class="1.103.3"></td>
                <td><input type="text" name="1.103.4" class="1.103.4"></td>

            </tr>
            <tr>
                <td>104</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Visualize Status-waiting for Mechanic\waiting for Technician\preset completed</td>
                <td>IE</td>
                <td>M\c\Tech\IE</td>
                <td> <input type="text" name="1.104.1" class="1.104.1"></td>
                <td><select name="1.104.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.104.3" class="1.104.3"></td>
                <td><input type="text" name="1.104.4" class="1.104.4"></td>

            </tr>
            <tr>
                <td>105</td>
                <td>1Day</td>
                <td>1D</td>
                <td>start Back to Back QCO 1st  operator finishes , (QCO -Quick Change Over)</td>
                <td>IE</td>
                <td>M\c\Tech\RQC\IE</td>
                <td> <input type="text" name="1.105.1" class="1.105.1"></td>
                <td><select name="1.105.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.105.3" class="1.105.3"></td>
                <td><input type="text" name="1.105.4" class="1.105.4"></td>

            </tr>
            <tr>
                <td>106</td>
                <td>1Day</td>
                <td>1D</td>
                <td>Take Production from 1st hour from every changed operator.</td>
                <td>IE</td>
                <td>Tech\Sup\IE</td>
                <td> <input type="text" name="1.106.1" class="1.106.1"></td>
                <td><select name="1.106.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1.106.3" class="1.106.3"></td>
                <td><input type="text" name="1.106.4" class="1.106.4"></td>

            </tr>
            <tr>
                <td>107</td>
                <td>Last 3 Day</td>
                <td>L3</td>
                <td>FN-20%\FR-25%\Line Repeat-30%</td>
                <td></td>
                <td>Last 3 days(Before)</td>
                <td> <input type="text" name="3l.107.1" class="3l.107.1"></td>
                <td><select name="3l.107.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3l.107.3" class="3l.107.3"></td>
                <td><input type="text" name="3l.107.4" class="3l.107.4"></td>

            </tr>
            <tr>
                <td>108</td>
                <td>Last 3 Day</td>
                <td>L2</td>
                <td>FN-40%\FR-45%\Line Repeat-50%</td>
                <td></td>
                <td>Last 2 days(Before)</td>
                <td> <input type="text" name="3l.108.1" class="3l.108.1"></td>
                <td><select name="3l.108.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3l.108.3" class="3l.108.3"></td>
                <td><input type="text" name="3l.108.4" class="3l.108.4"></td>

            </tr>
           
            <tr>
                <td>109</td>
                <td>Last 3 Day</td>
                <td>L1</td>
                <td>FN-60%\FR-62%\Line Repeat-65%</td>
                <td></td>
                <td>Last 1 days(Before)</td>
                <td> <input type="text" name="3l.109.1" class="3l.109.1"></td>
                <td><select name="3l.109.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3l.109.3" class="3l.109.3"></td>
                <td><input type="text" name="3l.109.4" class="3l.109.4"></td>

            </tr>
            <tr>
                <td>110</td>
                <td>New 1st Day</td>
                <td>N1</td>
                <td>(Bra -20%,25%,30%)-(Non Bra - 30%, 32%, 35%)</td>
                <td>PM \IEM</td>
                <td>1st day (New)</td>
                <td> <input type="text" name="1n.110.1" class="1n.110.1"></td>
                <td><select name="1n.110.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1n.110.3" class="1n.110.3"></td>
                <td><input type="text" name="1n.110.4" class="1n.110.4"></td>
            </tr>
           
            <tr>
                <td>111</td>
                <td>New 1st Day</td>
                <td>N1</td>
                <td>Clear all operator Method & Qulity deficulties</td>
                <td>TEC</td>
                <td>1st day (New) </td>
                <td> <input type="text" name="1n.111.1" class="1n.111.1"></td>
                <td><select name="1n.111.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1n.111.3" class="1n.111.3"></td>
                <td><input type="text" name="1n.111.4" class="1n.111.4"></td>
            </tr>
            <tr>
                <td>112</td>
                <td>New 1st Day</td>
                <td>N1</td>
                <td>Hourly Production Followup</td>
                <td>Sup</td>
                <td>1st day (New)</td>
                <td> <input type="text" name="1n.112.1" class="1n.112.1"></td>
                <td><select name="1n.112.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1n.112.3" class="1n.112.3"></td>
                <td><input type="text" name="1n.112.4" class="1n.112.4"></td>

            </tr>
            <tr>
                <td>113</td>
                <td>New 1st Day</td>
                <td>N1</td>
                <td>Full Line capacity - Bottle necks clear</td>
                <td>IE</td>
                <td>1st day (New)</td>
                <td> <input type="text" name="1n.113.1" class="1n.113.1"></td>
                <td><select name="1n.113.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1n.113.3" class="1n.113.3"></td>
                <td><input type="text" name="1n.113.4" class="1n.113.4"></td>

            </tr>
            <tr>
                <td>114</td>
                <td>New 1st Day</td>
                <td>N1</td>
                <td>Increse  Random checks - Assure Quality</td>
                <td>RQC</td>
                <td>1st day (New)</td>
                <td> <input type="text" name="1n.114.1" class="1n.114.1"></td>
                <td><select name="1n.114.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1n.114.3" class="1n.114.3"></td>
                <td><input type="text" name="1n.114.4" class="1n.114.4"></td>

            </tr>
            <tr>
                <td>115</td>
                <td>New 1st Day</td>
                <td>N1</td>
                <td>Machines Re-setting - Quick responding</td>
                <td>M\C</td>
                <td>1st day (New)</td>
                <td> <input type="text" name="1n.115.1" class="1n.115.1"></td>
                <td><select name="1n.115.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="1n.115.3" class="1n.115.3"></td>
                <td><input type="text" name="1n.115.4" class="1n.115.4"></td>

            </tr>
            <tr>
                <td>116</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>(Bra-40%,42%,45%) - (Non Bra-45%,47%,50%)</td>
                <td>PM\IEM</td>
                <td>2nd Day (New)</td>
                <td> <input type="text" name="2n.116.1" class="2n.116.1"></td>
                <td><select name="2n.116.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.116.3" class="2n.116.3"></td>
                <td><input type="text" name="2n.116.4" class="2n.116.4"></td>
            </tr>
            <tr>
                <td>117</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>Clear all operator Method & Qulity deficulties</td>
                <td>TEC</td>
                <td>2st day (New)</td>
                <td> <input type="text" name="2n.117.1" class="2n.117.1"></td>
                <td><select name="2n.117.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.117.3" class="2n.117.3"></td>
                <td><input type="text" name="2n.117.4" class="2n.117.4"></td>

            </tr>
            <tr>
                <td>118</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>Hourly Production Followup</td>
                <td>Sup</td>
                <td>2st day (New)</td>
                <td> <input type="text" name="2n.118.1" class="2n.118.1"></td>
                <td><select name="2n.118.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.118.3" class="2n.118.3"></td>
                <td><input type="text" name="2n.118.4" class="2n.118.4"></td>

            </tr>
            <tr>
                <td>119</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>Production Material Consumption confirmation</td>
                <td>PM</td>
                <td>2st day (New)</td>
                <td> <input type="text" name="2n.119.1" class="2n.119.1"></td>
                <td><select name="2n.119.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.119.3" class="2n.119.3"></td>
                <td><input type="text" name="2n.119.4" class="2n.119.4"></td>

            </tr>
            <tr>
                <td>120</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>Bottle necks clear</td>
                <td>IE</td>
                <td>2st day (New)</td>
                <td> <input type="text" name="2n.120.1" class="2n.120.1"></td>
                <td><select name="2n.120.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.120.3" class="2n.120.3"></td>
                <td><input type="text" name="2n.120.4" class="2n.120.4"></td>

            </tr>
            <tr>
                <td>121</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>Assure Quality</td>
                <td>RQC</td>
                <td>2st day (New)</td>
                <td> <input type="text" name="2n.121.1" class="2n.121.1"></td>
                <td><select name="2n.121.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.121.3" class="2n.121.3"></td>
                <td><input type="text" name="2n.121.4" class="2n.121.4"></td>

            </tr>
            <tr>
                <td>122</td>
                <td>New 2st Day</td>
                <td>N2</td>
                <td>Machines Re-setting - Quick responding</td>
                <td>M\C</td>
                <td>2st day (New)</td>
                <td> <input type="text" name="2n.122.1" class="2n.122.1"></td>
                <td><select name="2n.122.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="2n.122.3" class="2n.122.3"></td>
                <td><input type="text" name="2n.122.4" class="2n.122.4"></td>

            </tr>
            <tr>
                <td>123</td>
                <td>New 3st Day</td>
                <td>N3</td>
                <td>(Bra - 60%,62%,65%) - (Non Bra - 60%,62%,65%)</td>
                <td>PM\IEM</td>
                <td>3st day (New)</td>
                <td> <input type="text" name="3n.123.1" class="3n.123.1"></td>
                <td><select name="3n.123.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3n.123.3" class="3n.123.3"></td>
                <td><input type="text" name="3n.123.4" class="3n.123.4"></td>

            </tr>
            <tr>
                <td>124</td>
                <td>New 3st Day</td>
                <td>N3</td>
                <td>Hourly Production Followup</td>
                <td>Sup</td>
                <td>3st day (New)</td>
                <td> <input type="text" name="3n.124.1" class="3n.124.1"></td>
                <td><select name="3n.124.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3n.124.3" class="3n.124.3"></td>
                <td><input type="text" name="3n.124.4" class="3n.124.4"></td>

            </tr>
            <tr>
                <td>125</td>
                <td>New 3st Day</td>
                <td>N3</td>
                <td>Full Line capacity - Bottle necks clear</td>
                <td>IE</td>
                <td>3st day (New)</td>
                <td> <input type="text" name="3n.125.1" class="3n.125.1"></td>
                <td><select name="3n.125.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3n.125.3" class="3n.125.3"></td>
                <td><input type="text" name="3n.125.4" class="3n.125.4"></td>

            </tr>
            <tr>
                <td>126</td>
                <td>New 3st Day</td>
                <td>N3</td>
                <td>Assure Quality</td>
                <td>RQC</td>
                <td>3st day (New)</td>
                <td> <input type="text" name="3n.126.1" class="3n.126.1"></td>
                <td><select name="3n.126.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3n.126.3" class="3n.126.3"></td>
                <td><input type="text" name="3n.126.4" class="3n.126.4"></td>
            </tr>
            <tr>
                <td>127</td>
                <td>New 3st Day</td>
                <td>N3</td>
                <td>Machines Re-setting - Quick responding</td>
                <td>M\C</td>
                <td>3st day (New)</td>
                <td> <input type="text" name="3n.127.1" class="3n.127.1"></td>
                <td><select name="3n.127.2">
                    <option value="N/A">N/A</option>
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select></td>
                <td><input type="date" name="3n.127.3" class="3n.127.3"></td>
                <td><input type="text" name="3n.127.4" class="3n.127.4"></td>

            </tr>
           
           
           
           
           
            

        </table>
    </form>
        

    
</body>
</html>