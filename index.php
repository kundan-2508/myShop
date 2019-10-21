<?php

include_once "captions/captions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--bootstrap css starts here-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--bootstrap css ends here-->
	
	<!--font awesome starts here-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--font awesome end here-->
	
	<!--jquery cdn starts here-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--jquery cdn end here-->
	
	<!--bootstrap js starts here-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--bootstrap js end here-->
  
	<!--title logo starts here-->
	<link rel="shortcut icon" href="images/logo.png" type="image/png" />
	<!--title logo ends here-->
	
	<!--title starts here-->
	<title> <?php echo websiteTitle;?></title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	<script src = "js/basicElement.js"></script> 
	<!--custom js ends here-->
	
</head>
<body>
	
	<form action="pdf.php" method="POST" id = "customerDetailsForm" target="_blank">
	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
				<div class="row">
					<h4><?php echo shopAddressLineOne ?></h4>
					<h4><?php echo shopAddressLineTwo ?></<h4>
					<h6><?php echo shopAddressAdditionalTitle ?></h6>
					<div style="border-bottom: 1px dotted black;margin-bottom: 6px;"></div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>

<!-- form field section -->
	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo serialNo;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name = "serialNo" id="serialNo" value = "" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo vechNo;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name = "vechNo" id="vechNo" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo vechType;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name = "vechType" id="vechType" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo charges;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="charges" id="charges" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo material;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="material" id="material" class="form-control">
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo partyRef;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name = "partyRef" id="partyRef" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo payment;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="payment" id="payment" class="form-control">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo driver;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="driver" id="driver" class="form-control">
					</div>
				</div>
				<br>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
<!-- weight field section -->

	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-5 col-lg-5"></div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<b><?php echo date("d-m-Y") ?><b>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-5"></div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-sm-10 col-md-10 col-lg-10 customer-details-card">
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo grossWeight;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="grossWeight" id="grossWeight" class="form-control">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<input type="text" name="grossWeightTime" id="grossWeightTime" value = "<?php echo date("d-m-Y").",".date("h:i"); ?>" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo tareWeight;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="tareWeight" id = "tareWeight" class="form-control">
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<input type="text" name="tareWeightTime" id="tareWeightTime" value = "<?php echo date("d-m-Y").",".date("h:i"); ?>" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<label for=""><?php echo netWeight;?> :</label>
					</div>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<input type="text" name="netWeight" id = "netWeight" class="form-control" readonly="true">
					</div>
				</div>
				<br>
				<div class="row">
					<div style="border-bottom: 1px dotted black;margin-bottom: 6px;"></div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
	<br>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<input type="submit" name = "saveCustomerDetailsButton" id = "saveCustomerDetailsButton" class="btn btn-primary form-control" value="<?php echo saveAndPrint; ?>">
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
	</div>

</form>
</body>
</html>