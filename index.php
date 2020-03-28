<?php



?>
<!DOCTYPE html>
<html>
<head>
		<center><img src="img/logo.png" width="100" height="100"></center>
	<title>Simple Contact Form</title>
</head>
<body>

	<p style="text-align: center; font-size: 30px;">CONTACT US</p><br/>

	<form method="POST" action="processform.php">

		<p style="text-align: center;">
		<label>first Name</label>
		<input type="text" name="firstname" style="margin-bottom: 50px;" placeholder="Enter your First Name"><br/>

		<label>Last Name</label>
		<input type="text" name="lastname" style="margin-bottom: 50px;" placeholder="Enter your Last Name"><br/>

		<label>Email</label>
		<input type="text" name="email" style="margin-bottom: 50px;" placeholder="Enter your Email"><br/>

		<label>Department</label>
		<select name="department">
		<option></option>
		<option>Frontend</option>
		<option>Backend</option>
		<option>C#</option>
		<option>Ui/Ux</option>
		</select><br/>
		<label>Gender</label>
		<input type="radio" name="gender" value="male" style="margin-bottom: 50px;" checked>Male
		<input type="radio" name="gender" value="female" style="margin-bottom: 50px;">Female<br/>
		<label>Massage</label><br/>
		<textarea name="Message"></textarea><br/>
		<p>
		<center><input type="checkbox" name="terms">By checking this box you agree to our terms and conditions </center>
		</p>

		<center><button type="Submit" name="save">Send Message</button></center>
	</p>
	</form>
	
</body>
</html>