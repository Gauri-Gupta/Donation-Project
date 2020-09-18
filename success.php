<?php
session_start();
?>
<?php
$name =  $_POST['holdname'];
$mail =  $_POST['holdmail'];
$amts   = $_POST['holdamount'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	 
	  <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
	<style type="text/css">
		body{
	  			background-image: url("images/11.jpg");
	  			background-repeat: no-repeat;
	  			background-size: auto;
				}
				table{
			width: 100%;
			background: white;
			font-size: 22px;
		}
		#s1,#aa{
			
						font-size: 40px;
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
		      button{
      	height: 45px;
        width: 150px;
       cursor: pointer;
       padding: 7px;
		font-weight: bold;
		font-size: 15px;
		background: #001a4d;
		border: 1px solid #0047b3;
		color: #ffffff;
		border-radius: 10px;
      }
      button:hover{
      	background:#1068a3;	
      }
      table {
  border-collapse: collapse;
  border: 1px solid black;
}
	</style>
</head>
<body>
	 <center id="s1">TRANSACTION SUCCESSFUL</center>
	 <table border="5">
	<tr>
		<h1><center><font color="white" size="6">INVOICE</font></center></h1>
	</tr>
	<tr bgcolor="#ccddff">
		<th >NAME</th>
		<th >EMAIL ID</th>
		<th >AMOUNT</th>
	</tr>
	<tr>
		<td align="center"><?php echo $name;?></td>
		<td align="center"><?php echo $mail;?></td> 
		<td align="center"><?php echo "INR ". $amts;?></td>
	</tr>

</table>
<center><img src="images/giphy.gif" height="300px" width="400px"></center>
	<marquee><font size="5" id="aa">Thank You For Your Contribution!!!</font></marquee>

<hr>



<center><a href="index.php"><button>Back to Home</button></a></center>

</body>
</html>