<!DOCTYPE html>
<html>
    <head>
        <title>Salary</title>
        <meta charset="UTF-8">
        <style>
            body {
                background-color: whitesmoke;
            }
            table {
                margin-left: auto;
                margin-right: auto;
            }
            #slip #details {
                text-align: right;
            }
            .slip {
                background-color: lightcyan;
                margin: 1.5%;
            }
            .salary {
                margin-top: 4%;
                border-style: double;
                margin-left: 20%;
                margin-right: 20%
            }
            </style>
    </head>
    <?php
        $emp=array(1001=>"Sam",1002=>"Nancy",1003=>"John",1004=> "Kevin",1005=>"Marry");
        $sal=array(1001=>65000,1002=>37000,1003=>45000,1004=>47000,1005=>34000);
    ?>
    <body align="center">
        <form action="#" method="POST">
            <h1>Employee Salary</h1>
            <table>
                <tr>
                    <td><label>Employee ID</label></td>
                    <td><input type="number" name="eid"></td>
                </tr>
                <tr>
                    <td><label>Number of Days Worked</label></td>
                    <td><input type="number" name="days"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="submit">Generate Salary Pay</button></td>
                </tr>
            </table>
        </form>
        <?php 
            if(isset($_POST['submit'])){
                $eid=$_POST['eid'];
                $days=$_POST['days'];
                echo "<hr>";
                echo "<div class='slip'><h2>Salary Pay Slip</h2>";
                echo "<table id='slip'>
                        <tr>
                            <td class='left'>Employee ID: ".$eid."</td>
                            <td class='right'>No of Working Days: ".$days."</td>
                        </tr>
                        <tr>
                            <td class='left'>Employee Name: ".$emp[$eid]."</td>
                            <td class='right'>Loss of Pay: ".(30-$days)."</td>
                        </tr>
                        </table>
                        </div>
                        <hr>
                        <div class='salary'>
                        <table id='details'>
                        <tr>
                            <td class='left'>Basic Pay: ".(0.5*$sal[$eid])."</td>
                            <td class='right'>Provident Fund(PF): 1500</td>
                        </tr>
                        <tr>
                            <td class='left'>House Rent Allowance (HRA): ".(0.2*$sal[$eid])."</td>
                            <td class='right'>Professional Tax: 750</td>
                        </tr>
                        <tr>
                            <td class='left'>Dearness Allowance (DA): ".(0.1*$sal[$eid])."</td>
                            <td class='right'>DEDUCTION(B): 2250</td>
                        </tr>
                        <tr>
                            <td class='left'>Conveyance Allowance: ".(0.1*$sal[$eid])."</td>
                            <td class='right'>Gross Salary(A): ".$sal[$eid]."</td>
                        </tr>
                        <tr>
                            <td class='left'>Medical Allowance: ".(0.1*$sal[$eid])."</td>
                            <td style='border-style: groove; border-color: blue' class='right'>Net Salary(A-B): ".($sal[$eid]-2250)."</td>
                        </tr>
                    </table>
                    </div>";
                        
            }
        ?>
            
