<html>
	<head>
		<title> form</title>
		<style>
			div{background-color:#f2f2f2; width:30%; margin:auto;border-radius:7px; padding:16px;}
			input[type=text], input[type=email], input[type=date],  
			input[type=number]{
				width:100%; padding:14px 8px; margin:5px; border-radius:5px;}
			input[type=submit]{width:100%; padding:14px 8px; margin:5px; border-radius:5px;
				background-color:#2ecc71; color:#ffffff; font-size:20px;
			}
			input[type=submit]:hover{ background-color:#27ae60; color:#ffffff;}
		</style>
	</head>
	<body>
		<div>
			<h1>Pre-order List</h1>
			<form action="action_form.php" method="POST">

				<label>Customer Name</label>
				<input type="text" name="customer_name" placeholder="Enter Customer Name">

                <label>Brand Name</label>
				<input type="text" name="brand_name" placeholder="Enter Brand Name">


				<label>Advance Payment</label>
				<input type="number" name="advance_payment" placeholder="Enter Advance Payment">


				<label>Phone</label>
				<input type="text" name="phone" placeholder="Enter phone number">


				<label>Estimate Delivery</label>
				<input type="date" name="estimate_delivery" placeholder="Enter Estimate Delivery Date">



				<input type="submit" Value="Submit">
				
			</form>
		</div>
	</body>

</html>

