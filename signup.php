<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RegistrationForm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/form.css">
</head>

<body>

	<div class="wrapper" style="background-image: url('https://images.unsplash.com/photo-1612945578381-6481cdd73b0a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTB8fGluZGlhbiUyMHdlZGRpbmd8ZW58MHx8MHx8fDA%3D');
		background-size: cover;
		background-position: center;">
		<div class="inner">
			<div class="image-holder">
				<img src="https://images.unsplash.com/photo-1594140700520-8afea3283e2c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fGluZGlhbiUyMHdlZGRpbmd8ZW58MHx8MHx8fDA%3D" alt="">
			</div>
			<form action="">
				<h3>Registration Form</h3>
				<div class="form-group">
					<input type="text" placeholder="First Name" class="form-control">
					<input type="text" placeholder="Last Name" class="form-control">
				</div>
				<div class="form-wrapper">
					<input type="text" placeholder="Username" class="form-control">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="form-wrapper">
					<input type="text" placeholder="Email Address" class="form-control">
					<i class="zmdi zmdi-email"></i>
				</div>
				<div class="form-wrapper">
					<select name="" id="" class="form-control">
						<option value="" disabled selected>Gender</option>
						<option value="male">Male</option>
						<option value="femal">Female</option>
						<option value="other">Other</option>
					</select>
					<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
				</div>
				<div class="form-wrapper">
					<input type="password" placeholder="Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>
				<div class="form-wrapper">
					<input type="password" placeholder="Confirm Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>
				<button>Register
					<i class="zmdi zmdi-arrow-right"></i>
				</button>
			</form>
		</div>
	</div>

</body>

</html>