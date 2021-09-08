<?php
include('component/header.php');
?>

<form name="payment" action="paymentprocess.php" method="POST">
   
   <label> Enter SC NO: </label> <input type="text" name="SC_NO" value="" required>  
   <label> Enter Customer ID: </label> <input type="text" name="CUSID" value="" required>  
   
   <label> Amount : </label> <input type="text" name="amount" value="<?php echo $_GET["amount"];?>" /> 
   <label> Bill Counter: </label> 
   <select name="BillCounter" required>
     <option value="" disabled selected >Choose option</option>
     <option value="Baneshwor">Baneshwor</option>
     <option value="Maitidwevi">Maitidevi</option>
     <option value="Dhapakhel">Dapakhale</option>
    </select>
    <br/>
    <input type="hidden" name="bid" value="<?php echo $_GET["bid"];?>" />
    
   <label> Payment Option : </label> 
     <select name="Payoption" required>
     <option value="" disabled selected >Choose option</option>
     <option value="Khalti">Khalti</option>
     <option value="Esewa">Esewa</option>
     <option value="ConnectIPS">ConnectIPS</option>
     <option value="BankTransfer">BankTransfer</option>
    </select>
        <br/><br/>

        
        <input type="submit" value="Post Form" style="border: none; padding:20px;background-color: #f42a2a;color:white;cursor:pointer; font-size: 20px;font-weight:bold">
 
</form>
<?php
include('component/footer.php');
?>