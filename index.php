.<!DOCTYPE html>
<html>
<head>
	<title>F0RM</title>
	<style type="text/css">
		label{
			text-align: center;
			margin: 15px;
		}
		input{
			border border-radius:  0px 10px solid green;
			padding: 5px;
			text-align: center;
			margin right: 20px;
			background: red;
			box-size:border; 

		}
	</style>
</head>
<body>
	<H2>FORM</H2>
	<FORM method="POST">
		<DIV>
			<label style="text-align: center;">NAME</label>
			<input type="text" name="name" placeholder="enter your name">
		</DIV><br>

		<DIV>
			<label>EMAIL</label>
			<input type="text" name="email" placeholder="enter your email">
		</DIV><br>
		<DIV>
			<label>GENDER</label>
			<input type="radio" name="Gender">MALE
			<input type="radio" name="Gender">FEMALE
			<input type="radio" name="Gender">OTHERS
		</DIV><br>
		<DIV>
			<label>CONTACT</label>
			<input type="text" name="contact" placeholder="enter your contact">
		</DIV><br>
		<DIV>
			<label>PASSWORD</label>
			<input type="text" name="password" placeholder="enter your password">
		</DIV>
	</FORM>

</body>
</html>