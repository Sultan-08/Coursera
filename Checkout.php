<?php
include("connect.php");
error_reporting(0);
?>

<html>
<head>
    <title>Confirm Your Payment</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/checkout.css">
</head>

    <div class="row">
    <div class="col-75">
        <div class="container">
            <form>

                <div class="row">

                    <div class="col-50">
                        <h1>Payment</h1>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <a href="./assets/images/Logo-visa-icon-PNG.png" style="color:navy;"></a>
                            <i class="fas-fa-cc-amex" style="color:blue;"></i>
                            <i class="fas-fa-cc-mastercard" style="color:red;"></i>
                            <i class="fas-fa-cc-discover" style="color:orange;"></i>
                        </div>
                        
                        <label for="name">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Your Name" required>

                        <label for="coursename">Selected Course</label>
                        <input type="text" id="coursename" name="coursename" placeholder="Course Name" required>

                        <label for="amount">Amount</label>
                        <input type="number" id="amount" name="amount" placeholder="Enter Amount" required>
<br>
                        <label for="date">Date</label>
                        <input type="text" id="date" name="date" placeholder="Enter Date" required>

                        <label for="ccnum">Credit card number</label>
                        <input type="text" maxlength="16" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-0000" required>

                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" maxlength="9" name="expmonth" placeholder="Month" required>
                        


                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" maxlength="4" id="expyear" name="expyear" placeholder="Year" required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" maxlength="3" id="cvv" name="cvv" placeholder="000" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="Pay-btn" onclick="visitPage();">
                        <a type="submit" name='submit' value="Continue to Pay">Continue to Pay</a>
                    </button>
                </div>
                
            </form>
        </div>
    </div>

</div>

</html>

<?php

$nm=$_GET['cardname'];
$cn=$_GET['coursename'];
$am=$_GET['amount'];
$dt=$_GET['date'];


$query="INSERT INTO PAYMENT VALUES ('$nm','$cn','$am','$dt')";

$data=mysqli_query($conn, $query);

if($data)
{
    echo "Payment Completed.";
}
else
{
    echo "Payment Failed!";
}
?>