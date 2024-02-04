<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,
			initial-scale=1.0" />
	<link rel="stylesheet" href="sty.css" class="css" />
</head>

<body>
    <form action="payment_db.php" method="post">
	<div class="container">
		<div class="main-content">
			
		</div>

		<div class="centre-content">
			
		</div>

		<div class="last-content">
			
			<button type="button"
					class="pay-now-btn">
				
			</button>

			<!-- <button type="button" class="pay-now-btn">
		Netbanking options
		</button> -->
		</div>

		<div class="card-details">
			<p>Pay using Credit or Debit card</p>

			<div class="card-number">
				<label> Card Number </label>
				<input type="text"
					class="card-number-field"
                    required="required"
                    name= "card"
					placeholder="###-###-###" />
			</div>
			<br />
			<div class="date-number">
				<label> Expiry Date </label>
				<input type="date"
					class="date-number-field"
                    required="required"
                    name ="exdate"
					placeholder="DD-MM-YY" />
			</div>

			<div class="cvv-number">
				<label> CVV number </label>
				<input type="text"
					class="cvv-number-field"
                    required="required"
                    name ="cvv"
					placeholder="xxx" />
			</div>
			<div class="nameholder-number">
				<label> Card Holder name </label>
				<input type="text"
					class="card-name-field"
                    required="required"
                    name ="holder"
					placeholder="Enter your Name" />
			</div>
			<button type="submit"
					class="submit-now-btn">
				Submit
			</button>
		</div>
	</div>
</form>
</body>
</html>
