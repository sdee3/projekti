<?php 
	//Getting sifra
	$sifra = $_GET['sifra'];
	
	//Importing database
	require_once('dbConnect.php');
	
	//Creating sql query
	$sql = "DELETE FROM lista WHERE sifra = $sifra;";
	
	//Deleting record in database 
	if(mysqli_query($con,$sql)){
		echo 'Uspe�no brisanje!';
	}else{
		echo 'Neuspe�no brisanje.';
	}
	
	//closing connection 
	mysqli_close($con);
?>