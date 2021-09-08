<?php
 include('component/header.php');
?>

<form name="bill" method="POST" action="querybill.php">
        <label>Enter SC No.</label>
        <input type="text" name="SC_NO" required>
        <label> Enter Customer ID</label>
        <input type="text" name="CUSID" required>
        <input type="submit" value="Post Form" style="border: none; padding:20px;background-color: #f42a2a;color:white;cursor:pointer; font-size: 20px;font-weight:bold">
 
</form>
<?php
 include('component/footer.php');
?>
