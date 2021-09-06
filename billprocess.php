<?php
 include('component/header.php');
?>

    <div class="bill">
    Bill Process Form
    </div>
    <br/>
    <div class="info">
    <u>The information you entered is,</u>
</div>
<br/>
<?php
    $SCNO=$_POST["SC_NO"];
    $CUSID=$_POST["CUSID"];
    $fname=$_POST["fname"];
    $mrdate=$_POST["mrdate"];
    $preading=$_POST["preading"];
    $creading=$_POST["creading"];

    $demandtype = $_POST["demandtype"];

    $fy=$_POST["fy"];
   
    $months=$_POST["months"];
    $unit = $creading-$preading;

    $unitrate=7;

    $billamount = $unit*$unitrate;
?>
<div class="info">
SC No.: <?php echo $SCNO ?> <br/><br/>
CUSID : <?php echo $CUSID ?> <br/><br/>
Full Name : <?php echo $fname ?> <br/><br/>
Meter Reading Date : <?php echo $mrdate ?> <br/><br/>
Previous Reading : <?php echo $preading ?> <br/><br/>
Current Reading : <?php echo $creading ?> <br/><br/>
Demand Type : <?php echo $demandtype ?> <br/><br/>
FY : <?php echo $fy ?> <br/><br/>
Month : <?php echo $months ?> <br/><br/>
Unit Consumed : <?php echo $unit ?> <br/><br/>
Bill Amount : <?php echo $billamount ?> <br/><br/>
</div>


<?php

$pstatus=0;
$servername = "localhost";
$username = "neacase";
$password = "neacase";
$dbname = "neacase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
//echo "Connected Successfully";


$query = "INSERT INTO tbl_bill_info (SCNO,CUSID,Fname,Mdate,Pre_reading,Curr_reading,Unit_consumed,demand_type,Bill_amount,FY,Months,P_Status)
            VALUES('$SCNO','$CUSID','$fname','$mrdate','$preading', '$creading', '$unit', '$demandtype', '$billamount', '$fy', '$months', '$pstatus')";

if (mysqli_query($conn, $query)) {
    //echo "New record has been added successfully !";
 } else {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);

//mysqli_query($conn,$query);
?>
<?php
 include('component/footer.php');
?>