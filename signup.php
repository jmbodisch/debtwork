<html>
	<head>
		<title>Sign-Up | DebtWork</title>
		<!-- Latest compiled and minified CSS -->
		<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
			crossorigin="anonymous"/>
		<!-- Latest compiled and minified JavaScript -->
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			crossorigin="anonymous">
		</script>
		<style type='text/CSS'>
			#main
			{
				margin: auto;
				width: 22%;
				text-align: center;
			}
			#link
			{
				color: white;
			}
			.form-left
			{
				float: left;
				padding-bottom: 36px;
			}
			.form-right
			{
				float: right;
				padding-bottom: 36px;
			}
		</style>
	</head>
	<body>
	<div id="main">
			<h1>Sign-Up</h1><br><br>
			<form method="POST" action="register.php">
				<div class="form-inline">
					<div class="form-group form-left">
						<input type="text" class="form-control" id="first" placeholder="First Name">
					</div>
					<div class="form-group form-right">
						<input type="text" class="form-control" id="last" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Enter Email">
				</div><br>
				<div class="form-group">
					<input type="text" class="form-control" id="username" placeholder="Username">
				</div><br>
				<div class="form-group">
					<input type="password" class="form-control" id="password" placeholder="Password">
					<small class="form-text text-muted">Limit: 32 characters</small>
				</div><br><br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
</html>
