<!--This file demonstrates payment, does not execute payment-->
<div id="payment_box" align="center" width=20%>
    <form style=width:20% method=POST>
    <fieldset>
        <legend><h4><font color='red' size='2'>Atmiya College</font></h4></legend>
    <?php
    include("sqlconnect.php");
    include("citation_payment_info.php");
    echo "<form>
    <fieldset align='left'>
      <legend>Receipt</legend>
      <font size='2'>Violator information</font><br>
      <font size='1'>Fullname: $fname[0] $fname[1]</font><br>
      <font size='1'>Reason: $des[0]</font><br><hr/>
      <table width=100%>
        <tr align='right'><td>
          <font color='darkgray' size='1' style=font-family:sans-serif>Amount: AU$ $fee[0]<br>GST: AU$    0  </font><br><br>
          <font color='red' size='1' style=font-family:sans-serif>Total: AU$ $fee[0] </font>
        </td></tr>
      </table>
    </fieldset>
    </form>";
    ?><hr>
    <form method=POST>
        <img src="images/payment.png" width=80%><br><hr>
        <font size='2' style=font-family:sans-serif>
            Name on card: <input type="text" size="15" name='fname'><br>
            Card number: <input type="text" size="15" name='cnum'><br>
            CVV: <input type="text" size="3" name='cvv'><br>
        </font>
        <input type='submit' value='Pay' name='pay'>
    <?php
    if(isset($_POST['pay']) && !empty($_POST['fname']) && !empty($_POST['cnum']) && !empty($_POST['cvv'])) {
        $paid=mysql_query("UPDATE citation SET paid='YES' WHERE citationID='$id'");
        echo "<br><font color='red' size='1' style=font-family:sans-serif>
            Your payment has successfully completed!<br>Redirecting...</font>";
        header("Refresh: 2, url='homepage.html'");
        mysql_close($dblink);
    }
    ?>
    </form>
    </fieldset>
</div>
