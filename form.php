<?php 
session_start();

 if (isset($_POST['Submit'])) { 
 $_SESSION['FirstName'] = $_POST['FirstName'];
 $_SESSION['Email']=$_POST['Email'];
 $_SESSION['Amount']=$_POST['Amount'];
 } 

?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	
	<style type="text/css">
		

body,
html {
  height: 100%;
}

body {
  font-family: "Lato", sans-serif;
  background-image: url("images/11.jpg");
  display: flex;
  align-items: center;
  flex-direction: column;
  align-content: center;
  justify-content: center;
  color: white;
}

.container {
  width: 400px;
}

form {
  display: flex;
  flex-direction: column;
  background: transparent;
  max-width: 320px;
  padding: 2rem 2rem 2rem 2rem;
  position: relative;
}
form::before, form::after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  transition: all 0.5s ease;
}
form::before {
  z-index: -1;
  background: transparent;
  -webkit-transform: translateX(-3.5rem) translateY(-3.75rem);
          transform: translateX(-3.5rem) translateY(-3.75rem);
  border: 6px solid #00004d;
}
form::after {
  background: #66b3ff;
  z-index: -2;
  -webkit-transform: translateX(-2rem) translateY(-2.25rem);
          transform: translateX(-2rem) translateY(-2.25rem);
}
form h1 {
  text-align: center;
  margin: 0 0 0.25rem 0;
  padding: 0;
  font-size: 1.5rem;
}
form small {
  display: block;
  margin: 0 auto 1rem;
  padding: 0;
  font-size: 14px;
}
form:focus-within {
  background: #0ea8ec;
}
form:focus-within::before {
  width: 0%;
  height: 0%;
  -webkit-transform: translatex(0px) translatey(0px);
          transform: translatex(0px) translatey(0px);
}
form .field {
  display: flex;
  flex-flow: column-reverse;
  margin-bottom: 1em;
}
form label,
form input {
  transition: all 0.3s ease;
  touch-action: manipulation;
}
form label {
  opacity: 0;
}
form input {
  padding: 10px 20px;
  border: 4px solid white;
  margin: 0 1.5rem;
  background-color: transparent !important;
  -webkit-appearance: none;
  color: white;
}
form input:-webkit-autofill {
  background-color: transparent !important;
  -webkit-box-shadow: 0 0 0px 1000px #0ea8ec inset;
  -webkit-text-fill-color: white !important;
}
form input::-webkit-input-placeholder {
  color: white;
}
form input:-ms-input-placeholder {
  color: white;
}
form input::-ms-input-placeholder {
  color: white;
}
form input::placeholder {
  color: white;
}
form input:focus {
  color: #0e39fe;
  font-weight: bold;
  outline: 0;
  border: 6px solid #00004d;
}
form input::-webkit-input-placeholder {
  opacity: 1;
  transition: inherit;
}
form input:focus::-webkit-input-placeholder {
  opacity: 0;
}
form button {
  border: none;
  padding: 0.85rem 1rem;
  margin-top: 2rem;
  background-color: #00004d;
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  width: 65%;
  position: absolute;
  bottom: -20px;
  right: 18%;
  letter-spacing: 0.15em;
  transition: all 0.3s ease;
  text-decoration: none;
  text-align: center; 
}
form button:hover {
  border: 6px solid #090c9b;
}
form p {
  font-size: 0.75rem;
  line-height: 1.125rem;
  margin: 0.5rem 1.5rem 1.75rem 1.5rem;
}
form p.success-message {
  font-size: 1.25rem;
  text-align: center;
  line-height: 2rem;
  margin: 1.5rem auto 5rem auto;
}
	</style>
</head>
<body>
	<div class="container">
  <form autocomplete="off" id="form" action="pay.php" method="post" onsubmit="return formValidation();">
    <h1 id="message">Please fill the following details </h1><small id="smallMessage"> </small>
    <div class="field">
      <input type="text" name="FirstName" placeholder="Name" id="n1" autocomplete="off"/>
      <label for="name">Name</label>
    </div>
   <div class="field">
      <input type="text" name="Email" placeholder="Email" id="email1" autocomplete="off"/>
      <label for="email">Email</label>
    </div>
   <div class="field">
      <input type="number" name="Amount" placeholder="Amount" id="num1" autocomplete="off"/>
      <label for="num">Amount</label>
    </div>
	<button type="submit" value="submit">Donate</button>
  </form>
</div>

<script type="text/javascript">

function formValidation() {
			var a,b,d,e;
			
			a=document.getElementById("n1").value;
		    d=document.getElementById("num1").value;
		    e=document.getElementById("email1").value;
		    const submitBtn = document.getElementById('submit');
		    var mailformat = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
			var nameformat=/^[A-Za-z_]{1,32}$/;
			var amtformat=/^[0-9]*$/;
		   if(mailformat.test(e)==false)
		{
		alert("Invalid E-mail");
		return false;
		}
		
		else if(nameformat.test(a)==false)
		{
		alert("Invalid format of Name. Re-Enter");
		return false;
		}
		
		else if(amtformat.test(d)==false)
		{
		alert("Invalid Amount. Re-Enter");
		return false;
		}
		
		else		
		return true;
			
	}
	
</script>
</body>
</html>