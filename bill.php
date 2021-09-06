<?php
 include('component/header.php');
?>
<div class="bill">
    Bill Entry Form

</div>
    <form name="bill" method="POST" action="billprocess.php">
        <label>Enter SC No.</label>
        <input type="text" name="SC_NO" required>
        <label> Enter Customer ID</label>
        <input type="text" name="CUSID" required>
        <label> Enter Full Name</label>
        <input type="text" name="fname" required>
        <label>Meter Reading Date</label>
        <input type="date" name="mrdate" required>
        <label> Previous Reading</label>
        <input type="text" name="preading" required>
        <label> Current Reading</label>
        <input type="text" name="creading" required>
       
        <label>Demand Type : </label>
        <select name="demandtype">
            <option value="" disabled selected>Choose Option</option>
            <option value="5A">5A</option>
            <option value="15A">15A</option>
            <option value="30A">30A</option>
        </select>
        <br/>
        <label>FY : </label>
        <select name="fy">
            <option value = "" disabled selected> Choose Option</option>
            <option value="2077">2077</option>
            <option value="2078">2078</option>
            <option value="2079">2079</option>
            <option value="2080">2080</option>
            <option value="2081">2081</option>
        </select>
        <br/>
        <label>Months : </label>
        <select name="months">
            <option value = "" disabled selected> Choose Option</option>
            <option value="Baisakh">Baisakh</option>
            <option value="Jestha">Jestha</option>
            <option value="Ashad">Ashad</option>
            <option value="Shrawan">Shrawan</option>
            <option value="Bhadra">Bhadra</option>
            <option value="Ashoj">Ashoj</option>
            <option value="Kartik">Kartik</option>
            <option value="Mangsir">Mangsir</option>
            <option value="Poush">Poush</option>
            <option value="Magh">Magh</option>
            <option value="Falgun">Falgun</option>
            <option value="Chaitra">Chaitra</option>
        </select>

        
        <br/>
        <input type="submit" value="Proceed" style="border: none; padding:20px;background-color: #f42a2a;color:white;cursor:pointer; font-size: 20px;font-weight:bold">
    </form>

<?php
 include('component/footer.php');
?>
