<?php
session_start();
$cname =  $_POST['FirstName'];
$email =  $_POST['Email'];
$amt   =  $_POST['Amount'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
		body{
	  			background-image: url("images/11.jpg");
	  			background-repeat: no-repeat;
	  			background-size: auto;
				}
				.razorpay-payment-button {		
						width: 220px;
						padding: 7px;
						cursor: pointer;
						font-weight: bold;
						font-size: 15px;
						background: #001a4d;
						border: 1px solid #0047b3;
						color: #ffffff;
						border-radius: 10px;
				}
				.razorpay-payment-button:hover {
								background: #002080;	
								box-shadow :3px 5px #b3c6ff;
							}
				.t1{		
						width: 200px;
						padding: 7px;
						cursor: pointer;
						font-weight: bold;
						font-size: 15px;
						background: #001a4d;
						border: 1px solid white;
						color: #ffffff;
						border-radius: 10px;

					  }
				.t1:hover {
								
								background: #002080;	
								box-shadow :3px 5px #b3c6ff;
							}
							#b1{
							color: #00004d;
						

						font-size: 50px;
						font-family: 'Amaranth';
						-webkit-text-stroke: 1px black;
			   color: #f2f2f2;
			   text-shadow:
		       3px 3px 0 #000,
		     -1px -1px 0 #000,  
		      1px -1px 0 #000,
		      -1px 1px 0 #000,
		       1px 1px 0 #000;
						}
	</style>
</head>
<body>
<center id="b1">Welcome <?php echo($cname);?></center>
	<table align="center" >
		<tr>
			<td>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" >
<input type="hidden" name="hosted_button_id" value="RSGURTP45UUH6">
		<input type="hidden" name="cmd" value="_xclick">

            <input type="hidden" name="business" value="<?php echo 'kenandchip@gmail.com'; ?>">
		
        <input type="hidden" name="currency_code" value="INR">

       <input type='hidden' name='cancel_return' value='http://localhost/donate/cancel.php'>

<input type='hidden' name='return' value='http://localhost/donate/success.php'>

 <br>

<input  type="image" src="images/pay.png" class="t1"  border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img  alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="holdname" value="<?php echo "$cname"?>">
		<input type="hidden" name="holdmail" value="<?php echo "$email"?>">
		<input type="hidden" name="holdamount" value="<?php echo "$amt"?>">
    </form>


			</td>			
		</tr>
		<tr>
			<td align="center" style="color: white;">
				OR
			</td>
		</tr>
		<tr>
			<td>
				<form  action="success.php" method="POST">
				<!-- Note that the amount is in paise = 50 INR -->
				<script
					src="https://checkout.razorpay.com/v1/checkout.js"
					data-key="rzp_test_SswW5VbHbR6fEb"
					data-buttontext="Pay with Razorpay"
					data-name="The Sparks Foundation"
					data-description="Donation"
					data-image="images/sparks.png"
					data-theme.color="#F37254"
					data-amount="<?php echo($amt*100);?>"
					data-prefill.name="<?php echo($cname);?>"
					data-prefill.email="<?php echo($email);?>"
				>
				</script>
				<input type="hidden" value="Hidden Element" name="hidden">
		<input type="hidden" name="holdname" value="<?php echo "$cname"?>">
		<input type="hidden" name="holdmail" value="<?php echo "$email"?>">
		<input type="hidden" name="holdamount" value="<?php echo "$amt"?>">
		
			</form>
			</td>
		</tr>
			
	</table>
	<br>
	<br>
	<center><img src="images/donate-img.gif" height="200px" width="350px" style="border-radius: 20%"></center>
</body>
</html>

