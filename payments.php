<?php 

	$customer_id = $_POST['customer_id'];

	//Connect to the database, file behind root
	include("../../like_charity/db-connect.php");

	// CUSTOMER TABLE 

	$stmt = $conn->prepare('SELECT * FROM Customer WHERE CustomerID = :customer_id');
	$stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_INT);
	$stmt->execute();
	$result = $stmt->fetchAll();

	$customer_name = $result[0]['Name'];

	// PAYMENTS TABLE

	$stmt = $conn->prepare('SELECT * FROM Payments WHERE CustomerId = :customer_id');
	$stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_INT);
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Return only the associated array

	// Create three cumulative amounts, based on payment status
	foreach ($result as $row) {
		if ($row['Status'] == 'successful') {
			$successful_payments += $row['Amount'];
		} elseif ($row['Status'] == 'pending') {
			$pending_payments += $row['Amount'];
		} else {
			$failed_payments += $row['Amount'];
		}
	}

	$not_paid = $failed_payments;
	$provisional_paid = $successful_payments + $pending_payments;
	$total_paid = $successful_payments;
	$outstanding = $provisional_paid - $total_paid;


	include("results.php");

 ?>