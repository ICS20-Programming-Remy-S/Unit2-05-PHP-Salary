<?php
  // declare constants
  define("TAX_RATE", 0.2005);
  
	// get the Rate and Hours worked from the textfields
	$hoursWorked = $_POST['hoursWorked'];
	$hourlyRate= $_POST['hourlyRate'];

	// calculate the area
  $totalPay = $hoursWorked * $hourlyRate;
  $tax = $totalPay *TAX_RATE;
  $takeHomeSalary = $totalPay - $tax
?>
<?php echo "<h3>Results:</h3>
  After taxes your take home slary is $" . round($takeHomeSalary, 2) .
  "<br>Amount of tax money the goverment will resive from you is " . round($tax, 2) . "." 
?>