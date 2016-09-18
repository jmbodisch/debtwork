<html>
	<head>
		<title>New Form | DebtWork</title>
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
				width: 30%;
				text-align: center;
			}
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
  			<a class="navbar-brand" href="main.php">DebtWork</a>
  			<ul class="nav navbar-nav">
    			<li class="nav-item active">
					<a class="nav-link" href="outgoing.php">Outgoing</a>
    			</li>
    			<li class="nav-item active"> 
					<a class="nav-link" href="incoming.php">Incoming</a>
    			</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">New Form<span class="sr-only">(current)</span></a>
				</li>
  			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item active">
					<a class="nav-link" href="#">Logout</a>
				</li>
			</ul>
		</nav>
		<div id="main">
			<h1>New Form</h1><br><br>
			<form method="POST" action="addDebt.php">
				<div class="form-group">
					<label for="debtor">Owed By</label>
					<input type="text" class="form-control" name="debtor" placeholder="Username">
				</div><br>
				<div class="form-group">
					<label for="creditor">Giving To</label>
					<input type="text" class="form-control" name="creditor" placeholder="Username">
				</div><br>
				<div class="form-group">
					<label for="amount">Amount</label>
					<div class="input-group">
						<div class="input-group-addon">$</div>
						<input type="text" class="form-control" name="amount" placeholder="0.00">
					</div>
				</div><br>
				<div class="form-group">
					<label for="memo">Memo</label>
					<input class="form-control" name="memo" maxlength="40">
					<small class="form-text text-muted">Limit: 40 characters</small>
				</div><br>
				<div class="form-group">
					<label for="date">Date</label>
					<input type="text" class="form-control" name="date" placeholder="yyyy-mm-dd">
				</div><br><br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
</html>

