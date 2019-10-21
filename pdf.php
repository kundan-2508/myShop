<?php

include_once "fpdf/fpdf.php";
include_once "captions/captions.php";

if(isset($_POST['saveCustomerDetailsButton'])){
	$serialNo = serialNo;
	$serialNoValue = @$_POST['serialNo'];
	$charges = charges;
	$chargesValue = @$_POST['charges'];
	$payment = payment;
	$paymentValue = @$_POST['payment'];
	$vechNo = vechNo;
	$vechNoValue = @$_POST['vechNo'];
	$vechType = vechType;
	$vechTypeValue = @$_POST['vechType'];
	$material = material;
	$materialValue = @$_POST['material'];
	$partyRef = partyRef;
	$partyRefValue = @$_POST['partyRef'];
	$driver = driver;
	$driverValue = @$_POST['driver'];
	$grossWeight = grossWeight;
	$grossWeightValue = @$_POST['grossWeight'];
	$tareWeight = tareWeight;
	$tareWeightValue = @$_POST['tareWeight'];
	$netWeight = netWeight;
	$netWeightValue = @$_POST['netWeight'];
	$shopAddressLineOne = shopAddressLineOne;
	$shopAddressLineTwo = shopAddressLineTwo;
	$shopAddressAdditionalTitle = shopAddressAdditionalTitle;
	$colon = ": ";
	$chargesSymbol = " /-";
	$vechTypeInWheeler = " WEELER";
	$weightInKg = " Kg";


	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->Ln(10);
	$pdf->SetFont('Times','',14);
	$pdf->Cell(190,8,$shopAddressLineOne,0,1,'C');
	$pdf->Cell(190,8,$shopAddressLineTwo,0,1,'C');
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(190,8,$shopAddressAdditionalTitle,'B',1,'C');
	$pdf->Ln(12);


	// printing first row
	$pdf->Cell(5);
	$pdf->Cell(25,8,$serialNo,0,0,'L');
	$pdf->Cell(25,8,$colon.$serialNoValue,0,0,'L');
	$pdf->Cell(15);
	$pdf->Cell(25,8,$vechNo,0,0,'L');
	$pdf->Cell(25,8,$colon.$vechNoValue,0,0,'L');
	$pdf->Cell(15);
	$pdf->Cell(25,8,$vechType,0,0,'L');
	$pdf->Cell(25,8,$colon.$vechTypeValue.$vechTypeInWheeler,0,1,'L');
	// printing second row
	$pdf->Cell(5);
	$pdf->Cell(25,8,$charges,0,0,'L');
	$pdf->Cell(25,8,$colon.$chargesValue.$chargesSymbol,0,0,'L');
	$pdf->Cell(15);
	$pdf->Cell(25,8,$material,0,0,'L');
	$pdf->Cell(25,8,$colon.$materialValue,0,0,'L');
	$pdf->Cell(15);
	$pdf->Cell(25,8,$partyRef,0,0,'L');
	$pdf->Cell(25,8,$colon.$paymentValue,0,1,'L');

	// printing third row
	$pdf->Cell(5);
	$pdf->Cell(25,8,$payment,0,0,'L');
	$pdf->Cell(25,8,$colon.$paymentValue,0,0,'L');
	$pdf->Cell(80);
	$pdf->Cell(25,8,$driver,0,0,'L');
	$pdf->Cell(25,8,$colon.$driverValue,0,1,'L');

	// printing date
	$pdf->Ln(5);
	$pdf->Cell(190,8,date("d-m-Y"),0,1,'C');
	$pdf->Ln(5);

	//Printing weight section first row
	$pdf->Cell(5);
	$pdf->Cell(40,8,$grossWeight,0,0,'L');
	$pdf->Cell(5,8,$colon,0,0,'L');
	$pdf->Cell(5);
	$pdf->Cell(40,8,$grossWeightValue.$weightInKg,0,0,'L');
	$pdf->Cell(40,8,date("d-m-Y").",".date("h:i"),0,1,'L');

	//Printing weight section second row
	$pdf->Cell(5);
	$pdf->Cell(40,8,$tareWeight,0,0,'L');
	$pdf->Cell(5,8,$colon,0,0,'L');
	$pdf->Cell(5);
	$pdf->Cell(40,8,$tareWeightValue.$weightInKg,0,0,'L');
	$pdf->Cell(40,8,date("d-m-Y").",".date("h:i"),0,1,'L');

	//Printing weight section third row
	$pdf->Cell(5);
	$pdf->Cell(40,8,$netWeight,0,0,'L');
	$pdf->Cell(5,8,$colon,0,0,'L');
	$pdf->Cell(5);
	$pdf->Cell(40,8,$netWeightValue.$weightInKg,0,1,'L');

	//line break at the last
	$pdf->Ln(8);
	$pdf->Cell(190,0,"",'B',0,'C');
	$pdf->Output();


}
else
{
	header("location:home.php");
}


?>
