<?php 

$units = '';
$fuel_cost = '';

if(isset($_POST['submit'])){
	$units = $_POST['units'];
	$total = calculate($units);
}

function calculate($units){
	if($units <= 32){
		$total = $units * 7.85;

	}

	if($units > 33 && $units <= 64){
		$total = $units * 7.85;
	}

	if($units > 65 && $units <= 96){
		$total = 32 * 7.85;
		$total += 32 * 7.85;
		$units = $units - 64;
		$total += $units * 10;
	}

	if($units > 97 && $units <= 128){
		$total = 32 * 7.85;
		$total += 32 * 7.85;
		$total += 32 * 10;
		$units = $units - 96;
		$total += $units * 27.75;
	}

	if($units > 128){
		$total = 32 * 7.85;
		$total += 32 * 7.85;
		$total += 32 * 10;
		$total += 32 * 27.75;
		$units = $units - 128;
		$total += $units * 32;
	}


	$total += 480;

	return $total;

	$total = '';
}

