<?php
include('dbconnect.php');
?>
<?php
$SC_NO=$_POST["SC_NO"];
$CUS_ID=$_POST["CUSID"];

$query = "select * from tbl_bill_info where SCNO='$SC_NO' and CUSID='$CUS_ID' and p_status=0";
$result = mysqli_query($conn, $query);


echo "<table border='1'>
    <tr>
        <td>S.N.</td>
        <td>FY</td>
        <td>Months</td>
        <td>CurrentReading</td>
        <td>PreviousReading</td>
        <td>Unit Consumed</td>
        <td>Bill Amount</td>
        <td>Payment Status</td>
</tr>";
$i=1;

while($row = mysqli_fetch_array($result))
{

    echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row['FY'] . "</td>";
        echo "<td>" . $row['Months'] . "</td>";
        echo "<td>" . $row['Curr_reading'] . "</td>";
        echo "<td>" . $row['Pre_reading'] . "</td>";
        echo "<td>" . $row['Unit_consumed'] . "</td>";
        echo "<td>" . $row['Bill_amount'] . "</td>";
        if($row['P_Status'] == 0)
        $pstatus = "Unpaid";
        else
        $pstatus = "Paid";
        $bid = $row['bid']
        ?>
        <td> <a href="pay.php?amount=<?php echo $row['Bill_amount'];?> && <?php echo $bid;?>"> <?php echo $pstatus;?></a></td>";
        <?php
    echo "</tr>";
    $i=$i+1;
}
echo "</table>";

?>