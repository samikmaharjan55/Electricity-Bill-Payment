<?php
 include('component/header.php');
?>

    <div class="bill">
    Payment Processing
    </div>
    <br/>
    <div class="info">
    <u>The Payment Processing Page:</u>
</div>
<br/>
<?php
 
 $SCNO=$_POST["SC_NO"]; 
 $CUSID=$_POST["CUSID"]; 
 $BillCounter=$_POST["BillCounter"]; 
 $Payoption=$_POST["Payoption"]; 
 $billamount=$_POST["amount"];
 $pstatus=1;
 $bid=$_POST["bid"];
      
   include("dbconnect.php");

      $query="INSERT into  bill_payment (p_date,SC_NO,amount,P_center,p_method ) 
      VALUES(now(),'$SCNO',$billamount,'$BillCounter','$Payoption')";
   
   //echo $query;
   $result=mysqli_query($conn,$query);
   if($result)
   {
	   //echo "Data Inserted Successfully";
	   $query="UPDATE tbl_bill_info set P_Status=1 where bid=$bid";
	   $result=mysqli_query($conn,$query);
	   //echo "Data updated Successfully";
   }
   else {
        echo "Error: " . $query . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>
<?php
 include('component/footer.php');
?>