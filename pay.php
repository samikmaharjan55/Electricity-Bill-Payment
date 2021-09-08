

<form name="payment" method="POST" action="paymentprocess.php">
        <label>Enter SC No.</label>
        <input type="text" name="SC_NO" value="">
        <br/><br/>
        <label> Enter Customer ID</label>
        <input type="text" name="CUSID" value=""> 
        <br/><br/>
        <label> Amount:</label>
        <input type="text" name="amount" value="<?php echo $_GET["amount"];?>">  
<br/><br/>
        <label> Bill Counter:</label>
        <select name="BillCounter">
            <option value="" disabled selected>Choose Option</option>
            <option value="Baneshwor">Baneshwor</option>
            <option value="Maitidevi">Maitidevi</option>
            <option value="Dhapakhel">Dhapakhel</option>
        </select>
        <br/><br/>
        <input type="hidden" name="bid" value="<?php echo $_GET["amount"];?>"> 

        <label> Payment Options:</label>
        <select name="PaymentOption">
            <option value="" disabled selected>Choose Option</option>
            <option value="Khalti">Khalti</option>
            <option value="Esewa">Esewa</option>
            <option value="ConnectIPS">ConnectIPS</option>
            <option value="BankTransfer">BankTransfer</option>
        </select>
        <br/><br/>

        
        <input type="submit" value="Proceed" style="border: none; padding:20px;background-color: #f42a2a;color:white;cursor:pointer; font-size: 20px;font-weight:bold">
 
</form>
