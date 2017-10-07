<!DOCTYPE html>
<html>
<head>
	<title>Pay for something</title>

	<link rel="stylesheet" type="text/css" href="css/app.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	<br>
	<div class="panel panel-default col-md-6 col-md-offset-3">
	  	<div class="panel-heading">Pay for something</div>
	  	<div class="panel-body">
	    	<form action="checkout.php" method="post" autocomplete="off">
	    		<div class="form-group">
				    <label for="item">Product</label>
				    <input type="text" class="form-control" name="product" placeholder="Product">
				</div>
				<div class="form-group">
				    <label for="amount">Price</label>
				    <input type="text" class="form-control" name="price" placeholder="Price">
				</div>
				<button type="submit" class="btn btn-default">Pay</button>
	    	</form>
	  	</div>
	  	<hr>
	  	<p>You'll be taken to PayPal to complete you payment.</p>
	</div>

</body>
</html>