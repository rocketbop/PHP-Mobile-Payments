<!DOCTYPE html>
<html>
<head>
	<title>Check User Payments</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>
	<div class="text-center">
	
		<h1>
		Choose a Customer ID.
		</h1>
		<p>
			Options are currently 1 or 2, until we get more customers.
		</p>
			<form action="payments.php" method="post">
				<input type="text" name="customer_id" placeholder="Customer ID">
				<input type="submit" name="submit" value="Submit">
			</form>

		<h2>
			Or select from the list.
		</h2>

			<form action="payments.php" method="post">
				<select name="customer_id">
					<option value="1">Customer 1</option>
					<option value="2">Customer 2</option>
				</select>
				<input type="submit" name="submit" value="Submit">
			</form>

	</div>

</body>
</html>