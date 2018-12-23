<!DOCTYPE html>
<html>
<head>
	<title>Electriciry Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<style>
	#elec {
		height:450px;
	}
</style>
<body>


<?php 
$total = '';

	include('calculation.php');
 ?>

<div>
	<div class="container">
		<div id="elec" class="d-flex align-items-center text-center" >

			<div class="col-md-6 offset-md-3" >
				<h2>Electricity Calculator</h2>
				<br>
				<h3>Please enter your total units:</h3>
<br><br>
				<form action="" method="post">
					<div class="form-group">
						<input type="text" name="units" class="form-control">
					</div>
					<button name="submit" class="btn btn-primary">Submit</button>
				</form>
<br><br>
				<div class="form-group">
					<label for="">Your BIll</label>
					<input type="text" value="<?= $total; ?>" class="form-control">					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-6 offset-md-3">
		<h4 class="text-center">Unit Price and Other Costs</h4>
		<br>
	<ul class="list-group">
		<li class="list-group-item">1st 32 Units : 7.85 per Unit</li>
		<li class="list-group-item">33 upto 64 units : 7.85 per Unit</li>
		<li class="list-group-item">65 upto 96 units : 10 per Unit</li>
		<li class="list-group-item">97 upto 128 units : 27.75 per Unit</li>
		<li class="list-group-item">Over 129 : 32 per Unit</li>
		<li class="list-group-item">Fixed Monthly Charge : 480</li>
	</ul>
	</div>
</div>

<footer>
	<div class="container text-center">
	<br>
		<h4>&copy; Webzone , Created By Em</h4>
	</div>
</footer>


</body>
</html>


