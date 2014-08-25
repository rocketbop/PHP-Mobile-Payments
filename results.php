<!DOCTYPE html>
<html>
<head>
	<title>Check User Payments</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
  <div class="panel">
      <h3 class="panel-heading text-center">Payments Information</h3>
      <table class="table table-striped">
          <thead>
              <tr>
                <th>Customer</th>
                <th>Total Paid (Provisional)</th>
                <th>Total Paid (Received)</th>
                <th>Remittances</th>
              </tr>
          </thead>
          <tr>
          	<td>

          	<?php 
          		echo $customer_name;
          	 ?>

          	</td>
          	<td>&euro;

          	<?php 
          		echo $provisional_paid;
          	?>

          	</td>
          	<td>

          		<?php 
          		echo $total_paid;
          		 ?>

          	</td>
          	<td>

          		<?php 
          		echo $outstanding;
          		 ?>

          	</td>
          </tr>
      </table>
  </div>
</body>