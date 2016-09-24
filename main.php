<?php include "base.php"; ?>
<html>
	<head>
		<title>Informatics | DebtWork</title>
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
			#link
			{
				color: white;
			}
			.navbar-nav
			{
				margin: 0;
				padding: 7.5px, 15px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-light bg-faded">
  			<a class="navbar-brand" href="#">DebtWork</a>
  			<ul class="nav navbar-nav">
    			<li class="nav-item active">
					<a class="nav-link" href="outgoing.php">Outgoing</a>
    			</li>
    			<li class="nav-item active"> 
					<a class="nav-link" href="incoming.php">Incoming</a>
    			</li>
				<li class="nav-item active">
					<a class="nav-link" href="form.php">New Form</a>
				</li>
  			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item active">
					<a class="nav-link" href="#">Logout</a>
				</li>
			</ul>
		</nav>

		<?php
		if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
		{
		?>
			<h1>Main Landing Page</h1>
			<h3>You should see this if you are already logged in</h3>
		<?php
		}
		elseif(!empty($_POST['username']) && !empty($_POST['password']))
		{
			$username = mysql_real_escape_string($_POST['username']);
    			$password = md5(mysql_real_escape_string($_POST['password']));

    			$checklogin = mysql_query("SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");
			
			if(mysql_num_rows($checklogin) == 1)
			{
				$row = mysql_fetch_array($checklogin);
				$email = $row['EmailAddress'];
				$_SESSION['Username'] = $username;
				$_SESSION['EmailAddress'] = $email;
				$_SESSION['LoggedIn'] = 1;

				echo "<h1>Logging u in now fam</h1>";
				echo "<meta http-equiv='refresh' content='=2;main.php' />";
			}
			else
			{
				echo "<h1>Login Failed homie</h1>";
			}
		}
		else
		{
		?>
			<h1>Welcome to Debtwork!</h1>
			<p>Debtwork is a debt-tracking app for you and your friends</p>
		<?php
		}
		?>
	</body>
</html>
