<!DOCTYPE html>

<html>
	<head>
		<title>Simple Calculator In PHP | Webdevtrick.com</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
	<div class="container" style="margin-top: 250px">

        <form method="post" >
	        <input name="number1" type="text"  style="width: 150px; display: inline" />
	        <select name="operation">
	        	<option value="plus">+</option>
	            <option value="minus">-</option>
	            <option value="multiply">*</option>
	            <option value="divided by">/</option>
	        </select>
	        <input name="number2" type="text"  style="width: 150px; display: inline" />
	        <input name="submit" type="submit" value="Calculate" />
	    </form>
		
		<?php
		
		// If the submit button has been pressed
		if(isset($_POST['submit']))
		{
		// Check number values
		if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
		{
		// Calculate total
		if($_POST['operation'] == 'plus')
		{
		$total = $_POST['number1'] + $_POST['number2'];	
		}
		if($_POST['operation'] == 'minus')
		{
		$total = $_POST['number1'] - $_POST['number2'];	
		}
		if($_POST['operation'] == 'multiply')
		{
		$total = $_POST['number1'] * $_POST['number2'];	
		}
		if($_POST['operation'] == 'divided by')
		{
		$total = $_POST['number1'] / $_POST['number2'];	
		}
		
		
		echo "<h2>{$total}</h2>";
		
		} else {
		
		
		echo 'Numeric values are required';
		
		}
		}
		
		?>
	    
	   
	    
		</div>
	
	</body>
</html>