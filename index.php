<!DOCTYPE html>
<html>
<head>
	<title>Pay for something</title>

	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="payment-container">
		<h2 class="header">Pay for something</h2>

		<form action="checkout.php" method="post" autocomplete="off">
			<label for="item">
				Product
				<input type="text" name="product">
			</label>
			<label for="amount">
				Price
				<input type="text" name="price">
			</label>

			<input type="submit" name="Pay">

			<p>You'll be taken to PayPal to complete you payment.</p>
			
		</form>

	</div>

</body>
</html>